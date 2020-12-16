//Declaring Variables
// Variables and functions can be outside the window load event
var Stats = "1RlZb9u6T8c5bwZYVqJITS5CrMuCIw3rucfmyi2j-";
var apiKey = "AIzaSyAM_cjZdUnAQMuv7-WMxWimmP72IUHjOrA";


// This Variable for [“Rank” (Lower number = higher emissions)]
//var Stats = "1N9VZ6fmzHM0s6xRxQEY2jJqtxagmv7CFjdM4nFi-";


// This is the variable that will hold the Mapbox map
var MAP;

// This is the access token for the map

//Data Display and Functions

// After the page loads, add the MAP and click events

$(window).load(function () {
    //$(document).ready(function() {


    L.mapbox.accessToken = 'pk.eyJ1IjoidWNsYWlvZXMiLCJhIjoiY2tpOWNhbmVqMGU5YjM1bW4yNWdhemRzcSJ9.yAY0hvGZ4aJOMZvEQPOKxw';
    // The MAP, with coordinates and zoom from the iframe
    MAP = L.mapbox.map('map', 'calecomaps.m77pfmd9').setView([33.984, -118.093], 10).addControl(L.mapbox.geocoderControl('calecomaps.ie7i3b66', {
        keepOpen: false
    }));

    L.control.locate({
        locateOptions: {
            maxZoom: 13
        }
    }).addTo(MAP);
    L.control.layers({
        'Los Angeles Base Map': L.mapbox.tileLayer('calecomaps.m77pfmd9').addTo(MAP),
    }, {
        'Sensitive Population Density': L.mapbox.tileLayer('calecomaps.7mig8k4v'),
        'California Protected Area': L.mapbox.tileLayer('calecomaps.toqu8nzc'),
        'Schools and Colleges': L.mapbox.tileLayer('calecomaps.vavvh43i'),
    }, {
        collapsed: false
    }).addTo(MAP);



    // Toggle Layers
    // In the propeties object for each marker define key's
    // like `rentals`, `fuel`, `tackleshop` that are set to true for false
    // depending on whether or they exist at a location.
    $('.menu-ui a').on('click', function () {
        // For each filter link, get the 'data-filter' attribute value.
        var filter = $(this).data('filter');
        $(this).addClass('active').siblings().removeClass('active');
        MAP.featureLayer.setFilter(function (f) {
            // If the data-filter attribute is set to "all", return
            // all (true). Otherwise, filter on markers that have
            // a value set to true based on the filter name.
            return (filter === 'all') ? true : f.properties[filter] === true;
        });
        return false;
    });



    MAP.legendControl.addLegend(document.getElementById('legend-content').innerHTML).addLegend(document.getElementById('legend-content2').innerHTML);

    // Stop the Scroll Zoom
    MAP.scrollWheelZoom.disable();

    //popup open event for the markers layer
    MAP.featureLayer.on('click', function (e) {

        // get the id of clicked marker
        // use console.log(e) to see the event object;
        var trif_id = e.layer.feature.properties["TRIF ID"];
        //var trif_id = window.open(e.layer.feature.properties["ID"]);

        // replace href and set click event of link
        $('.leaflet-popup-content a')
            //.attr('href', 'javascript:void(0);') // reset the href
            .attr('href', '#CompanyName')
            .unbind('click') // unbind any prior click events
            .click(function () {
                // add our click event
                $('#PIECV, #Table').css('height', '1000px', 'width', '2000px');
                drawVisualization(trif_id);

            });

    });

    // The click function -- don't actually need this anymore for clicks in the popups
    // var trif_id = "90063GRGND4116W";
    $(".drawChart").click(function () {
        var trif_id = $(this).attr('id');
        drawVisualization(trif_id);
    });

});

// Functions should generally be outside the window load event
function drawVisualization(trif_id) {
    $.get("https://www.googleapis.com/fusiontables/v1/query", {
        sql: "SELECT * FROM " + Stats + " WHERE TRIF_ID='" + trif_id + "'",
        key: apiKey
    }, function (response) {
        var columns = response.columns;

        // avoid an error if nothing returned, may want to add an error message here
        if (!response.rows) return;

        var Industry = response.rows[0][1];
        var Name = response.rows[0][2];
        var Address = response.rows[0][3];

        if (response.rows[0][9]) {
            var AirRelease = response.rows[0][9];
        } else {
            var AirRelease = "";
        }

        if (response.rows[0][10]) {
            var ToxicAirRelease = response.rows[0][10];
        } else {
            var ToxicAirRelease = "";
        }

        if (response.rows[0][13]) {
            var RPerEmployee = response.rows[0][13];
        } else {
            var RPerEmployee = "";
        }

        if (response.rows[0][14]) {
            var RPerRevenue = response.rows[0][14];
        } else {
            var RPerRevenue = "";
        }

        if (response.rows[0][15]) {
            var TPerEmployee = response.rows[0][15];
        } else {
            var TPerEmployee = "";
        }

        if (response.rows[0][16]) {
            var TPerRevenue = response.rows[0][16];
        } else {
            var TPerRevenue = "";
        }

        var Email = response.rows[0][17];

        // Add check for if value has something in it
        if (response.rows[0][18]) {
            var H1 = "<span>" + response.rows[0][18] + " </span>";
        } else {
            var H1 = "";
        }
        if (response.rows[0][19]) {
            var H2 = "<span>" + response.rows[0][19] + " </span>";
        } else {
            var H2 = "";
        }
        if (response.rows[0][20]) {
            var H3 = "<span>" + response.rows[0][20] + " </span>";
        } else {
            var H3 = "";
        }
        if (response.rows[0][21]) {
            var H4 = "<span>" + response.rows[0][21] + " </span>";
        } else {
            var H4 = "";
        }
        if (response.rows[0][22]) {
            var H5 = "<span>" + response.rows[0][22] + " </span>";
        } else {
            var H5 = "";
        }
        if (response.rows[0][23]) {
            var H6 = "<span>" + response.rows[0][23] + " </span>";
        } else {
            var H6 = "";
        }
        if (response.rows[0][24]) {
            var H7 = "<span>" + response.rows[0][24] + " </span>";
        } else {
            var H7 = "";
        }
        if (response.rows[0][25]) {
            var H8 = "<span>" + response.rows[0][25] + " </span>";
        } else {
            var H8 = "";
        }
        if (response.rows[0][26]) {
            var H9 = "<span>" + response.rows[0][26] + " </span>";
        } else {
            var H9 = "";
        }
        if (response.rows[0][27]) {
            var H10 = "<span>" + response.rows[0][27] + " </span>";
        } else {
            var H10 = "";
        }
        if (response.rows[0][28]) {
            var H11 = "<span>" + response.rows[0][28] + " </span>";
        } else {
            var H11 = "";
        }
        if (response.rows[0][29]) {
            var H12 = "<span>" + response.rows[0][29] + " </span>";
        } else {
            var H12 = "";
        }
        if (response.rows[0][30]) {
            var H13 = "<span>" + response.rows[0][30] + " </span>";
        } else {
            var H13 = "";
        }
        if (response.rows[0][31]) {
            var H14 = "<span>" + response.rows[0][31] + " </span>";
        } else {
            var H14 = "";
        }
        if (response.rows[0][32]) {
            var H15 = "<span>" + response.rows[0][32] + " </span>";
        } else {
            var H15 = "";
        }
        if (response.rows[0][33]) {
            var H16 = "<span>" + response.rows[0][33] + " </span>";
        } else {
            var H16 = "";
        }
        if (response.rows[0][34]) {
            var H17 = "<span>" + response.rows[0][34] + " </span>";
        } else {
            var H17 = "";
        }
        if (response.rows[0][35]) {
            var H18 = "<span>" + response.rows[0][35] + " </span>";
        } else {
            var H18 = "";
        }

        var AirReleaseRank = response.rows[0][36];
        var ToxicRank = response.rows[0][37];
        var AirEmployeeRank = response.rows[0][38];
        var AirRevenueRank = response.rows[0][39];
        var ToxicEmployeeRank = response.rows[0][40];
        var ToxicRevenueRank = response.rows[0][41];
        var Revenue = response.rows[0][8];
        var Employees = response.rows[0][12];


        $('#CompanyName').html("<h2 id=\"Name\"><span class=\"subheading\">Facility Name: " + Name + "</span></h2>");
        $('#SCORE').html("<h2 id=\"Score\"><span class=\"subheading\">Address: " + Address + "</span></h2>");
        $('#TypeIndustry').html("<h2 id=\"industry\"><span class=\"subheading\">Industry NAICS: " + Industry + "</span></h2>");

        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Facility Facts (2013)', 'Value (NaN = No Data)', 'Rank (Within Industry)'],
            ['Annual Revenue', Revenue + ' USD', ''],
            ['Number of Employees', Employees, ''],
            ['Total Air Releases', AirRelease + ' pounds', AirReleaseRank],
            ['Total Air Releases per $1000 of Revenue <a href="../total-revenue.html">[?]</a>', RPerRevenue + ' pounds/$1000', AirRevenueRank],
            ['Total Air Releases per Employee <a href="../total-employee.html">[?]</a>', RPerEmployee + ' pounds/employee', AirEmployeeRank],
            ['Toxicity of Air Releases <a href="../total-toxic-releases.html">[?]</a>', ToxicAirRelease + ' toxicity x pounds', ToxicRank],
            ['<a href="../chemicals.html">Health Hazards</a>', H1 + H2 + H3 + H4 + H5 + H6 + H7 + H8 + H9 + H10 + H11 + H12 + H13 + H14 + H15 + H16 + H17 + H18, ''],
            ['Contact This Facility <br><span style="font-weight:normal;"> We suggest you include the following in your email to a particular facility: <br>          - Your name <br>          - The city of your home neighborhood or workplace <br>          - Name of facility you are concerned about <br>          - Cal EcoMaps classification of the facility <br>           - Why you are concerned about that facility</span> ', "<a href=mailto:" + Email + "?subject=Concerned%20about%20Toxic%20releases%20from%20" + Name + ">" + Email + "</a>", '']
        ]);


        // Create and draw the visualization.
        visualization = new google.visualization.Table(document.getElementById('Table'));
        visualization.draw(data, {
            allowHtml: true
        });
    }, 'json');
}




google.setOnLoadCallback(drawVisualization);



// google.setOnLoadCallback(drawVisualization(trif_id));