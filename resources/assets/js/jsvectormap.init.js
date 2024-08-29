/* Template Name: Hously - Tailwind CSS Real Estate Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 2.2.0
   Created: May 2022
   File Description: For JS Vector map
*/

try {
    var map = new jsVectorMap({
        map: 'world',
        selector: '#map',
        zoomOnScroll: false,
        zoomButtons: false,
        selectedMarkers: [0, 1],
        markersSelectable: true,
        markers:[
            { name: "Palestine", coords: [31.9474,35.2272] },
            { name: "Russia", coords: [61.524,105.3188] },
            { name: "Canada", coords: [56.1304,-106.3468] },
            { name: "Greenland", coords: [71.7069,-42.6043] },
        ],
        markerStyle:{
            initial: { fill: "#16a34a" },
            selected: { fill: "#94a3b8" }
        },
        labels: {
            markers: {
            render: marker => marker.name
            }
        }
    });
} catch (error) {
    
}