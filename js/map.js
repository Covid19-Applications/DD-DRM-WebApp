function initMap() {
  var center = {lat: 28.644800, lng: 77.216721};
  var locations = [
    [
    'BLK Hospital<br>\
    Pusa Rd, Radha Soami Satsang, Rajendra Place, New Delhi, Delhi 110005<br>\
   <a href="https://goo.gl/maps/S2NrLubVsMND8s1A9">Get Directions</a>',   28.640380, 77.1771773],
    ['Metro Hospital<br>\
   E.S.I. Hospital Pedestrian Underpass, Block W, Shivaji Enclave, Bali Nagar, New Delhi, Delhi 110015<br>\
   <a href="https://goo.gl/maps/nE639guEm8PsX2vr5">Get Directions</a>', 28.656239, 77.105735],
    ['Apollo Spectra Hospitals<br>\
    66A/2, New Rohtak Road, Block 23 B, Block 2C, Karol Bagh, New Delhi, Delhi 110005<br>\
    <a href="https://goo.gl/maps/fHjh8gsCgQ5iY3EK7">Get Directions</a>', 28.665089, 77.219201],

    ['Delhi Institute of Trauma & Orthopedics (DITO)<br>\
    Room No-408, Ground Floor, Sant Parmanand Hospital 18, Sham Nath Marg,Civil Lines North Delhi, New Delhi, Delhi 110054<br>\
    <a href="https://goo.gl/maps/cQQ5x13FPpopERK7A">Get Directions</a>', 28.682787, 77.252821],

        ['Bhagat Hospital<br>\
   D-2/48-49, PT Vishnu Datt Marg, Block D2, Janakpuri, New Delhi, Delhi 110058<br>\
    <a href="https://goo.gl/maps/FticTqoqsfz4YEFM8">Get Directions</a>', 28.618388, 77.136550],

        ['Primus Super Speciality Hospital<br>\
   2, Chandragupta Marg, Chanakyapuri, New Delhi, Delhi 110021<br>\
    <a href="https://g.page/primusspecialityhospital?share">Get Directions</a>', 28.600838, 77.203517],

        ['Dharamshila Narayana Superspeciality Hospital<br>\
    Metro Station, Dharamshila marg, Vasundhara Enclave Near Ashok Nagar, Dallupura, New Delhi, Delhi 110096<br>\
    <a href="https://goo.gl/maps/qCiwbBNNLfmN5X8EA">Get Directions</a>', 28.612246, 77.334454],

        ['Manipal Hospital Delhi<br>\
    Sector 6 adjoining MTNL building, Main Rd, Dwarka, New Delhi, Delhi 110075<br>\
    <a href="https://goo.gl/maps/p8RCDzMMUN4P4Fs56">Get Directions</a>', 28.601716, 77.036098],

        ['Aashlok Hospital<br>\
    Aashlok 25 AB, Safdarjung Enclave, New Delhi, Delhi 110029<br>\
    <a href="https://g.page/Aashlok-Hospitals?share">Get Directions</a>', 28.578458, 77.216011],

        ['Holy Family Hospital<br>\
    Okhla Rd, Okhla, New Delhi, Delhi 110025<br>\
    <a href="https://goo.gl/maps/uwQbVMJE3Ly1VVty6">Get Directions</a>', 28.569240, 77.294973],


        ['Rosewalk Healthcare, South Delhi, Panchsheel Park<br>\
    N-88, Block N, Panchsheel Park North, Panchsheel Park, New Delhi, Delhi 110017<br>\
    <a href="https://g.page/rosewalkinfo?share">Get Directions</a>', 28.553001, 77.174531],


        ['Indraprastha Apollo Hospita<br>\
    Indraprastha Apollo Hospitals, Mathura Rd, Sarita Vihar, New Delhi, Delhi 110076<br>\
    <a href="https://g.page/apollo-hospital-delhi?share">Get Directions</a>', 28.556595 , 77.320245],


        ['Bansal Hospital<br>\
   Friends Colony, New Friends Colony, New Delhi, Delhi 110025<br>\
    <a href="https://goo.gl/maps/aGKMLkY3GxQii3Wu5">Get Directions</a>', 28.564747, 77.275035],



        ['Jeewan Hospital<br>\
    150, Bharath Nagar Road Jeewan Nagar, Gate Number 1, Maharani Bagh, New Delhi, Delhi 110014<br>\
    <a href="https://g.page/jeewanhospitalgate1?share">Get Directions</a>', 28.579138, 77.262897],

        ['Guru Harkrishan Hospita<br>\
    Near, Ring Rd, Vidyut Vihar, Pocket A, Sunlight Colony, New Delhi, Delhi 110014<br>\
    <a href="https://goo.gl/maps/P6z4oHXwLDBMQURW6">Get Directions</a>', 28.582922, 77.271333],

        ['Kailash Hospital, Noida<br>\
    H-33, Shaheed Arjun Sardana Marg, H Block, Pocket H, Sector 27, Noida, Uttar Pradesh 201301<br>\
    <a href="https://goo.gl/maps/qQAgyuzPDt1YpHU26">Get Directions</a>', 28.579201, 77.338299],


        ['Vinayak Hospital<br>\
    NH 1 Atta, Sector 27, Noida, Uttar Pradesh 201301<br>\
    <a href="https://goo.gl/maps/6erAiwFbA1TshKSd9">Get Directions</a>', 28.572041, 77.332892],


        ['IndoGulf Hospital & Diagnostics<br>\
    B-498 A, B Block, Pocket B, Sector 19, Noida, Uttar Pradesh 201301<br>\
    <a href="https://goo.gl/maps/ar8ouizTDV534qJV9">Get Directions</a>', 28.579277, 77.331862],



    ['NMC Superspeciality Hospital<br>\
    16-C Indian Bank, Block E, Sector 30, Noida, Uttar Pradesh 201303<br>\
   <a href="https://goo.gl/maps/X8qUPjj2MeVUQxih7">Get Directions</a>', 28.574377, 77.343792],
    

    ['Safdarjung Hospital<br>\
    Ansari Nagar East, near to AIIMS Metro Station, New Delhi, Delhi 110029<br>\
   <a href="https://goo.gl/maps/iZJEAi6KuZGEksdo9">Get Directions</a>', 28.568792, 77.207412],


    ['Sukhmani Hospital<br>\
    126A, opposite Rajasthan Vidyut Niwas, B-7, Block B 7, Arjun Nagar, Safdarjung Enclave, New Delhi, Delhi 110029<br>\
   <a href="https://goo.gl/maps/uugyzZHTxTfRtEEA9">Get Directions</a>', 28.560388, 77.201619],


    ['Adiva<br>\
    C-1/C, Green Park Ext Rd, Block B, Green Park Extension, Green Park, New Delhi, Delhi 110016<br>\
   <a href="https://goo.gl/maps/XxESb2ccmCLAKAbN7">Get Directions</a>', 28.558644, 77.206978],


    ['Dr. Arvind Taneja Clinic<br>\
   5, Siri Fort Rd, Sector 3, Sadiq Nagar, New Delhi, Delhi 110049<br>\
   <a href="https://goo.gl/maps/hsWzzPMQBsjXdSts5">Get Directions</a>', 28.554736, 77.227963],


    ['Access Health Care<br>\
    252 S Brand Blvd, Glendale, CA 91204<br>\
   <a href="https://goo.gl/maps/uJwQo9DpdwwCfSwm9">Get Directions</a>', 28.555610, 77.235032],


    ['Oncoplus Super Speciality Hospital<br>\
    A 288 - 290, Bhishma Pitamah Marg, Block A, Defence Colony, New Delhi, Delhi 110024<br>\
   <a href="https://goo.gl/maps/FrAfh5vtyVw4S3Ms7">Get Directions</a>', 28.573450, 77.229252],


    ['AYUSH HOLISTIC CENTER<br>\
    LANE, 4, Dr APJ Abdul Kalam Rd, New Delhi, 110011<br>\
   <a href="https://goo.gl/maps/VLkUeYVJXyMnfshd9">Get Directions</a>', 28.597198, 77.216134],


    ['IHBAS<br>\
   Tahirpur Road, SDN Hospital Rd, Dilshad Garden, Delhi, 110095<br>\
   <a href="https://goo.gl/maps/VXjyGBWCaAURv6cB6">Get Directions</a>', 28.681965, 77.305647],


    ['Red Cross Hospital<br>\
    Aradhak Marg, Chikamberpur Village, Chikamberpur, New Delhi, Delhi 110095<br>\
   <a href="https://goo.gl/maps/kK8VuFHrLbdsNkW39">Get Directions</a>',28.678167, 77.323682]
  ];
var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: center
  });
var infowindow =  new google.maps.InfoWindow({});
var marker, count;
for (count = 0; count < locations.length; count++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
      map: map,
      title: locations[count][0]
    });
google.maps.event.addListener(marker, 'click', (function (marker, count) {
      return function () {
        infowindow.setContent(locations[count][0]);
        infowindow.open(map, marker);
      }
    })(marker, count));
  }
}
