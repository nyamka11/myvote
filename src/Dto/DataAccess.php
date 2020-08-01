<?php

namespace App\Dto;

use Cake\ORM\TableRegistry;

class DataAccess
{
    private $ElectionDistrict;
    private $ElectionCandidates;
    private $PoliticalParty;
    private $Candidates;
    private $Elections;
    private $Name;

    public function __construct()
    {
        TableRegistry::getTableLocator()->setConfig('ElectionDistrict', ['table' => 't_election_district']);
        TableRegistry::getTableLocator()->setConfig('ElectionCandidates', ['table' => 'c_election_candidates']);
        TableRegistry::getTableLocator()->setConfig('PoliticalParty', ['table' => 't_political_party']);
        TableRegistry::getTableLocator()->setConfig('Candidates', ['table' => 't_candidates']);
        TableRegistry::getTableLocator()->setConfig('Elections', ['table' => 't_elections']);
        TableRegistry::getTableLocator()->setConfig('Name', ['table' => 'm_name']);

        $this->ElectionDistrict = TableRegistry::getTableLocator()->get('ElectionDistrict');
        $this->ElectionCandidates = TableRegistry::getTableLocator()->get('ElectionCandidates');
        $this->PoliticalParty = TableRegistry::getTableLocator()->get('PoliticalParty');
        $this->Candidates = TableRegistry::getTableLocator()->get('Candidates');
        $this->Elections = TableRegistry::getTableLocator()->get('Elections');
        $this->Name = TableRegistry::getTableLocator()->get('Name');
    }

    public function getActiveElection($cond)
    {
        if (empty($cond)) {
            $cond = ['is_active' => 1 ];
        }
        $electionInfo = $this->Elections->find()
        ->select([
            'id',
            'election_year',
            'election_date',
            'tag',
        ])
        ->where($cond)
        ->first();
        return $electionInfo;
    }

    /**
     *Сонгуулийн намуудын жагсаалт авах
     */
    public function getPoliticalPartyList($electionId)
    {
        $electionPartyList = $this->ElectionDistrict->find()
        ->select([
            'party_id' => 't_political_party.id',
            'short_name' => 't_political_party.short_name',
            'political_name' => 't_political_party.political_name'
        ])
        ->join([
            'table' => 'c_election_candidates',
            'type' => 'INNER',
            'conditions' => 'ElectionDistrict.id = c_election_candidates.election_district_id',
        ])
        ->join([
            'table' => 't_political_party',
            'type' => 'LEFT',
            'conditions' => 't_political_party.id = c_election_candidates.party_id',
        ])
        ->where([
            'election_id' => $electionId
        ])
        ->group(['c_election_candidates.party_id'])
        ->toArray();
        return $electionPartyList;
    }

    public function getDistrictCandidatesList($electionId, $districtId=null)
    {
        $where = ['ElectionDistrict.election_id' => $electionId];
        if (!is_null($districtId)) {
            $where['ElectionDistrict.id'] = $districtId;
        }
        $electionCandidatesList = $this->ElectionDistrict->find()
        ->select([
            'id',
            'district_name',
            'district_mandate',
            'district_area_name' => 'm_name.name'
        ])
        ->join([
            'table' => 'm_name',
            'type' => 'LEFT',
            'conditions' => 'm_name.id = district_area',
        ])
        ->contain(['ElectionCandidates' => ['PoliticalParty', 'Candidates']])
        ->where($where)
        ->order(['ElectionDistrict.id'])
        ->toArray();
        return $electionCandidatesList;
    }

    public function getCandidatesList($electionId, $districtId=null, $partyShortName=null)
    {
        $where = ['ElectionDistrict.election_id' => $electionId];
        if (!is_null($districtId)) {
            $where['ElectionDistrict.id'] = $districtId;
        }
        $electionCandidatesQuery = $this->ElectionDistrict->find()
        ->select([
            'id',
            'district_name',
            'district_mandate',
        ])
        ->contain(['ElectionCandidates' => function (\Cake\ORM\Query $q) use ($partyShortName) {
            $q->contain(['Candidates', 'PoliticalParty']);
            if (!is_null($partyShortName)) {
                return $q->where(['PoliticalParty.short_name' => $partyShortName]);
            }
            return $q;
        }])
        ->where($where)
        ->order(['ElectionDistrict.id']);
        if (!is_null($partyShortName)) {
            $electionCandidatesQuery->innerJoinWith('ElectionCandidates.PoliticalParty', function ($q) use ($partyShortName) {
                if (!is_null($partyShortName)) {
                    return $q->where(['PoliticalParty.short_name' => $partyShortName]);
                }
                return $q;
            });
        }
        $electionCandidatesList = $electionCandidatesQuery->toArray();
        return $electionCandidatesList;
    }

    public function getCandidateInfo($electionId, $candidateId)
    {
        $candidateInfo = $this->ElectionCandidates->find()
        ->select([
            'ElectionCandidates.candidate_id',
            'ElectionCandidates.plans_country',
            'ElectionCandidates.plans_district',
            'ElectionCandidates.plans_purpose',
            'first_name' => 't_candidates.first_name',
            'last_name' => 't_candidates.last_name',
            'fullname' => 't_candidates.fullname',
            'occupation' => 't_candidates.occupation',
            'degree' => 't_candidates.degree',
            'education' => 't_candidates.education',
            'experience' => 't_candidates.experience',
            'current_job' => 't_candidates.current_job',
            'web_site' => 't_candidates.web_site',
            'facebook' => 't_candidates.facebook',
            'twitter' => 't_candidates.twitter',
            'instagramm' => 't_candidates.twitter'
        ])
        ->join([
            'table' => 't_election_district',
            'type' => 'INNER',
            'conditions' => 'ElectionCandidates.election_district_id = t_election_district.id',
        ])
        ->join([
            'table' => 't_candidates',
            'type' => 'INNER',
            'conditions' => 't_candidates.id = ElectionCandidates.candidate_id',
        ])
        ->where([
            't_election_district.election_id' => $electionId,
            'ElectionCandidates.candidate_id' => $candidateId
        ])
        ->first();

        return $candidateInfo;
    }

    public function getElectionDistrictList($electionId)
    {
        $electionDistrictList = $this->ElectionDistrict->find()
        ->select([
            'id',
            'district_name',
            'district_mandate'
        ])
        ->where([
            'election_id' => $electionId
        ])
        ->order([
            'district_name'
        ])
        ->toArray();

        return $electionDistrictList;
    }

    public function getDistrictList()
    {
        $districtList = $this->Name->find()
        ->select([
            'id',
            'name',
        ])
        ->where([
            'attr' => '1'
        ])
        ->order([
            'order_num'
        ])
        ->toArray();

        return $districtList;
    }
}
