
var mapMn, mapUb;

AmCharts.ready(function() {
    mapMn = new AmCharts.AmMap();
    mapMn.zoomOnDoubleClick = false;
    mapMn.dragMap = false;
    mapMn.zoomControl = {
        homeButtonEnabled : false,
        zoomControlEnabled : false,
        panControlEnabled : false
    };
    mapMn.balloon.color = "#000000";
    mapMn.backgroundColor = "#0f0";
    mapMn.color = "#FFFFFF";

    var dataProvider = {
        mapURL : "vendor/ammap/svg/mongolia.svg",
        getAreasFromMap : true
    };

    mapMn.dataProvider = dataProvider;

    mapMn.areasSettings = {
        color: "#C1C1C1",
        // outlineColor: "#FFFFFF",
        rollOverOutlineColor: "#000000",
        selectable : true,
        selectedColor: "#FF3444"
    };
    mapMn.mouseDownMapObject = function(event) {
        let path = rootData.rootPath + "election/" + rootData.activeElection.tag + "/district/" + event.id
        window.open(path);
    };
    mapMn.write("mapMn");

    mapUb = new AmCharts.AmMap();
    mapUb.zoomOnDoubleClick = false;
    mapUb.dragMap = false;
    mapUb.zoomControl = {
        homeButtonEnabled : false,
        zoomControlEnabled : false,
        panControlEnabled : false
    };
    mapUb.balloon.color = "#000000";

    var dataProvider = {
        mapURL : "vendor/ammap/svg/ulaanbaatar.svg",
        getAreasFromMap : true
    };

    mapUb.dataProvider = dataProvider;

    mapUb.areasSettings = {
        color: "#C1C1C1",
        outlineColor: "#FFFFFF",
        rollOverOutlineColor: "#000000",
        selectable : true,
        selectedColor: "#FF3444"
    };
    mapUb.mouseDownMapObject = function(event) {
        let path = rootData.rootPath + "election/" + rootData.activeElection.tag + "/district/" + event.id
        window.open(path);
    }
    mapUb.write("mapUb");
});