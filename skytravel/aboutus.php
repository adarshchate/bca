<?php include('top.php'); ?> <!-- nav bar -->
<html> 
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
.about-section {
  padding: 50px;
  text-align: center;
  background-color:#C0C0C0;
  color: black; 
}
.sec1{
  text-align: justify;
}

</style>
<script>
var message = "function disabled";
function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }
if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }
document.onmousedown = rtclickcheck;
 

    document.onkeydown = function (e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
            return false;
        }
    }
</script>



</head>
<body>

<div class="about-section">
<h1>About Us</h1> <h3>  is an ISO 9001:2008 certified company.</h3>
<p> SkyTravels is the Maharashtra's largest bus service providing and Organizer Travels,Towers
    trusted by over 50k+ happy customers in india.SkyTravells offers bus ticket booking,Buses servies
    Booking through its Branches,website,iOS and Android mobile apps forall major routes in India.</p>
    <hr> 
    <marquee style="font-size:13px;"> SkyTravels-Our Information Technology infrastructure enables
     us to respond to you quickly.24X7 | Contact us|Email:sky@travel.com | Phone: 020-88887777.
</marquee>
    <hr>

<p> <b>Top Cities </b><br> Hyderabad | Bangalore | Chennai |Mumbai| Pune | Solapur </p>
  <p> The company’s cars and buses were now hired on call as well as yearly contract basis.
     What put it ahead in the fiercely competitive marketplace was uncompromising hard work, 
     punctuality, safety, periodic renewal of fleet and excellent friendly back office support.
</p>
  <p> <b>Pune Head Office </b> <br> 
  Address:
  Office No. 106-108,Megha Center,Hadapsar Pune - Solapur Road, Pune, Maharashtra 411028. 
 </p>
 <p> While on tour, we understand that you may need assistance at any time. SkyTravel Exotic 
   Routes offers service support 24×7 for the entire duration of your tour. At any time during
   your tour, you will have the service of a SkyTravel Exotic Routes Expert available. </p>

   

<br><br><br>
  <p font>Copyright © 2021 Sky.Tech Online Private Limited, India. All rights reserved</p>
  
</div>

</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Locator</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://www.gstatic.com/external_hosted/handlebars/v4.7.6/handlebars.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map-container {
        width: 100%;
        height: 100%;
        position: relative;
        font-family: "Roboto", sans-serif;
        box-sizing: border-box;
      }

      #map-container button {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        font-size: inherit;
        cursor: pointer;
      }

      #map {
        position: absolute;
        left: 22em;
        top: 0;
        right: 0;
        bottom: 0;
      }

      #locations-panel {
        position: absolute;
        left: 0;
        width: 22em;
        top: 0;
        bottom: 0;
        overflow-y: auto;
        background: white;
        padding: 0.5em;
        box-sizing: border-box;
      }

      @media only screen and (max-width: 876px) {
        #map {
          left: 0;
          bottom: 50%;
        }

        #locations-panel {
          top: 50%;
          right: 0;
          width: unset;
        }
      }

      #locations-panel-list .section-name {
        font-weight: 500;
        font-size: 0.9em;
        margin: 1.8em 0 1em 1.5em;
      }

      #locations-panel-list .location-result {
        position: relative;
        padding: 0.8em 3.5em 0.8em 1.4em;
        border-bottom: 1px solid rgba(0, 0, 0, 0.12);
        cursor: pointer;
      }

      #locations-panel-list .location-result:first-of-type {
        border-top: 1px solid rgba(0, 0, 0, 0.12);
      }

      #locations-panel-list .location-result:last-of-type {
        border-bottom: none;
      }

      #locations-panel-list .location-result.selected {
        outline: 2px solid #4285f4;
      }

      #locations-panel-list button.select-location {
        margin-bottom: 0.6em;
      }

      #locations-panel-list .location-result h2.name {
        font-size: 1em;
        font-weight: 500;
        margin: 0;
      }

      #locations-panel-list .location-result .address {
        font-size: 0.9em;
        margin-bottom: 0.5em;
      }

      #locations-panel-list .location-result .details-button {
        font-size: 0.9em;
        color: #7e7efd;
      }

      #location-results-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      /* ------------- DETAILS PANEL ------------------------------- */
      #locations-panel-details {
        padding: 1.4em;
        box-sizing: border-box;
        display: none;
      }

      #locations-panel-details .back-button {
        font-size: 1em;
        font-weight: 500;
        color: #7e7efd;
        display: block;
        text-decoration: none;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
        font-family: inherit;
      }

      #locations-panel-details .back-button .icon {
        width: 20px;
        height: 20px;
        vertical-align: bottom;

        /* Match link color #7e7efd */
        filter: invert(65%) sepia(87%) saturate(4695%) hue-rotate(217deg) brightness(105%) contrast(98%);
      }

      #locations-panel-details > header {
        text-align: center;
      }

      #locations-panel-details .banner {
        margin-top: 1em;
      }

      #locations-panel-details h2 {
        font-size: 1.1em;
        font-weight: 500;
        margin-bottom: 0.3em;
      }

      #locations-panel-details .address {
        text-align: center;
        font-size: 0.9em;
        margin-top: 1.3em;
      }

      #locations-panel-details .atmosphere {
        text-align: center;
        font-size: 0.9em;
        margin: 0.8em 0;
      }

      #locations-panel-details .star-rating-numeric {
        color: #555;
      }

      #locations-panel-details .star-icon {
        width: 1.2em;
        height: 1.2em;
        margin-right: -0.3em;
        margin-top: -0.08em;
        vertical-align: top;
        filter: invert(88%) sepia(60%) saturate(2073%) hue-rotate(318deg) brightness(93%) contrast(104%);
      }

      #locations-panel-details .star-icon:last-of-type {
        margin-right: 0.2em;
      }

      #locations-panel-details .price-dollars {
        color: #555;
      }

      #locations-panel-details hr {
        height: 1px;
        color: rgba(0, 0, 0, 0.12);
        background-color: rgba(0, 0, 0, 0.12);
        border: none;
        margin-bottom: 1em;
      }

      #locations-panel-details .contact {
        font-size: 0.9em;
        margin: 0.8em 0;
        display: flex;
        align-items: center;
      }

      #locations-panel-details .contact .icon {
        flex: 0 0 auto;
        width: 1.5em;
        height: 1.5em;
      }

      #locations-panel-details .contact .right {
        padding: 0.1em 0 0 1em;
      }

      #locations-panel-details a {
        text-decoration: none;
        color: #7e7efd;
      }

      #locations-panel-details .hours .weekday {
        display: inline-block;
        width: 5em;
      }

      #locations-panel-details .website a {
        white-space: nowrap;
        display: inline-block;
        overflow: hidden;
        max-width: 16em;
        text-overflow: ellipsis;
      }

      #locations-panel-details p.attribution {
        color: #777;
        margin: 0;
        font-size: 0.8em;
        font-style: italic;
      }
    </style>
    <script>
      'use strict';

      /** Hide a DOM element. */
      function hideElement(el) {
        el.style.display = 'none';
      }

      /** Show a DOM element that has been hidden. */
      function showElement(el) {
        el.style.display = 'block';
      }

      /**
       * Defines an instance of the Locator+ solution, to be instantiated
       * when the Maps library is loaded.
       */
      function LocatorPlus(configuration) {
        const locator = this;

        locator.locations = configuration.locations || [];
        locator.capabilities = configuration.capabilities || {};

        const mapEl = document.getElementById('map');
        locator.panelListEl = document.getElementById('locations-panel-list');
        const sectionNameEl =
            document.getElementById('location-results-section-name');
        const resultsContainerEl = document.getElementById('location-results-list');

        const itemsTemplate = Handlebars.compile(
            document.getElementById('locator-result-items-tmpl').innerHTML);

        locator.selectedLocationIdx = null;
        locator.userCountry = null;

        // Initialize the map -------------------------------------------------------
        const mapOptions = configuration.mapOptions;
        locator.map = new google.maps.Map(mapEl, {
          fullscreenControl: mapOptions.fullscreenControl,
          zoomControl: mapOptions.zoomControl,
          streetViewControl: mapOptions.streetViewControl,
          mapTypeControl: mapOptions.mapTypeControl,
          mapTypeControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT,
          },
        });

        // Store selection.
        const selectResultItem = function(locationIdx, panToMarker) {
          locator.selectedLocationIdx = locationIdx;
          for (let locationElem of resultsContainerEl.children) {
            locationElem.classList.remove('selected');
            if (getResultIndex(locationElem) === locator.selectedLocationIdx) {
              locationElem.classList.add('selected');
            }
          }
          if (panToMarker && (locationIdx != null)) {
            locator.map.panTo(locator.locations[locationIdx].coords);
          }
        };

        // Create a marker for each location.
        const markers = locator.locations.map(function(location, index) {
          const marker = new google.maps.Marker({
            position: location.coords,
            map: locator.map,
            title: location.title,
          });
          marker.addListener('click', function() {
            selectResultItem(index, false);
          });
          return marker;
        });

        // Fit map to marker bounds.
        locator.updateBounds = function() {
          const bounds = new google.maps.LatLngBounds();
          for (let i = 0; i < markers.length; i++) {
            bounds.extend(markers[i].getPosition());
          }
          locator.map.fitBounds(bounds);
        };
        locator.updateBounds();

        // Render the results list --------------------------------------------------
        const getResultIndex = function(elem) {
          return parseInt(elem.getAttribute('data-location-index'));
        };

        locator.renderResultsList = function() {
          let locations = locator.locations.slice();
          for (let i = 0; i < locations.length; i++) {
            locations[i].index = i;
          }
          sectionNameEl.textContent = `All locations (${locations.length})`;
          const resultItemContext = { locations: locations };
          resultsContainerEl.innerHTML = itemsTemplate(resultItemContext);
          for (let item of resultsContainerEl.children) {
            const resultIndex = getResultIndex(item);
            if (resultIndex === locator.selectedLocationIdx) {
              item.classList.add('selected');
            }

            const resultSelectionHandler = function() {
              selectResultItem(resultIndex, true);
            };

            // Clicking anywhere on the item selects this location.
            // Additionally, create a button element to make this behavior
            // accessible under tab navigation.
            item.addEventListener('click', resultSelectionHandler);
            item.querySelector('.select-location')
                .addEventListener('click', function(e) {
                  resultSelectionHandler();
                  e.stopPropagation();
                });

            item.querySelector('.details-button')
                .addEventListener('click', function() {
                  locator.showDetails(resultIndex);
                });
          }
        };

        // Optional capability initialization --------------------------------------
        initializeDetails(locator);

        // Initial render of results -----------------------------------------------
        locator.renderResultsList();
      }

      /** Initialize Place Details service and UI for the locator. */
      function initializeDetails(locator) {
        const panelDetailsEl = document.getElementById('locations-panel-details');
        const detailsService = new google.maps.places.PlacesService(locator.map);

        const detailsTemplate = Handlebars.compile(
            document.getElementById('locator-details-tmpl').innerHTML);

        const renderDetails = function(context) {
          panelDetailsEl.innerHTML = detailsTemplate(context);
          panelDetailsEl.querySelector('.back-button')
              .addEventListener('click', hideDetails);
        };

        const hideDetails = function() {
          showElement(locator.panelListEl);
          hideElement(panelDetailsEl);
        };

        locator.showDetails = function(locationIndex) {
          const location = locator.locations[locationIndex];
          const context = {location};

          // Helper function to create a fixed-size array.
          const initArray = function(arraySize) {
            const array = [];
            while (array.length < arraySize) {
              array.push(0);
            }
            return array;
          };

          if (location.placeId) {
            const request = {
              placeId: location.placeId,
              fields: [
                'formatted_phone_number', 'website', 'opening_hours', 'url',
                'utc_offset_minutes', 'price_level', 'rating', 'user_ratings_total'
              ]
            };
            detailsService.getDetails(request, function(place, status) {
              if (status == google.maps.places.PlacesServiceStatus.OK) {
                if (place.opening_hours) {
                  const daysHours =
                      place.opening_hours.weekday_text.map(e => e.split(/\:\s+/))
                          .map(e => ({'days': e[0].substr(0, 3), 'hours': e[1]}));

                  for (let i = 1; i < daysHours.length; i++) {
                    if (daysHours[i - 1].hours === daysHours[i].hours) {
                      if (daysHours[i - 1].days.indexOf('-') !== -1) {
                        daysHours[i - 1].days =
                            daysHours[i - 1].days.replace(/\w+$/, daysHours[i].days);
                      } else {
                        daysHours[i - 1].days += ' - ' + daysHours[i].days;
                      }
                      daysHours.splice(i--, 1);
                    }
                  }
                  place.openingHoursSummary = daysHours;
                }
                if (place.rating) {
                  const starsOutOfTen = Math.round(2 * place.rating);
                  const fullStars = Math.floor(starsOutOfTen / 2);
                  const halfStars = fullStars !== starsOutOfTen / 2 ? 1 : 0;
                  const emptyStars = 5 - fullStars - halfStars;

                  // Express stars as arrays to make iterating in Handlebars easy.
                  place.fullStarIcons = initArray(fullStars);
                  place.halfStarIcons = initArray(halfStars);
                  place.emptyStarIcons = initArray(emptyStars);
                }
                if (place.price_level) {
                  place.dollarSigns = initArray(place.price_level);
                }
                if (place.website) {
                  const url = new URL(place.website);
                  place.websiteDomain = url.hostname;
                }

                context.place = place;
                renderDetails(context);
              }
            });
          }
          renderDetails(context);
          hideElement(locator.panelListEl);
          showElement(panelDetailsEl);
        };
      }
    </script>
    <script>
      const CONFIGURATION = {"capabilities":{"details":true},"locations":[{"title":"हडपसर गाडीतल बस स्टँड","address1":"उत्कर्ष नगर","address2":"हडपसर, पुणे, महाराष्ट्र 411028, भारत","coords":{"lat":18.500623652264796,"lng":73.94081061799926},"placeId":"ChIJC7s2IpTDwjsRt--afATRPwA"}],"mapOptions":{},"mapsApiKey":"AIzaSyCwqTfd_3XagwO3Oa48yGOFC1dlojOHCl8"};

      function initMap() {
        new LocatorPlus(CONFIGURATION);
      }
    </script>
    <script id="locator-result-items-tmpl" type="text/x-handlebars-template">
      {{#each locations}}
        <li class="location-result" data-location-index="{{index}}">
          <button class="select-location">
            <h2 class="name">{{title}}</h2>
          </button>
          <div class="address">{{address1}}<br>{{address2}}</div>
          <button class="details-button">
            View details
          </button>
        </li>
      {{/each}}
    </script>
    <script id="locator-details-tmpl" type="text/x-handlebars-template">
      <button class="back-button">
        <img class="icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/arrow_back/v11/24px.svg" alt=""/>
        Back
      </button>
      <header>
        <div class="banner">
          <svg width="23" height="32" viewBox="0 0 23 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9976 11.5003C22.9976 13.2137 22.7083 14.9123 21.8025 16.7056C18.6321 22.9832 12.7449 24.3314 12.2758 30.7085C12.2448 31.1294 11.9286 31.4744 11.4973 31.4744C11.0689 31.4744 10.7527 31.1294 10.7218 30.7085C10.2527 24.3314 4.3655 22.9832 1.19504 16.7056C0.289306 14.9123 0 13.2137 0 11.5003C0 5.13275 5.14557 0 11.5003 0C17.852 0 22.9976 5.13275 22.9976 11.5003Z" fill="#4285F4"/>
            <path fill-rule="evenodd" clip-rule="evenodd" transform="translate(5.5,5.5)" d="M6 8.84091L9.708 11L8.724 6.92961L12 4.19158L7.6856 3.83881L6 0L4.3144 3.83881L0 4.19158L3.276 6.92961L2.292 11L6 8.84091Z" fill="#FBE15C"/>
          </svg>
        </div>
        <h2>{{location.title}}</h2>
      </header>
      <div class="address">
        {{location.address1}}<br>
        {{location.address2}}
      </div>
      <div class="atmosphere">
        {{#if place.rating}}
          <span class="star-rating-numeric">{{place.rating}}</span>
          <span>
            {{#each place.fullStarIcons}}
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/star/v15/24px.svg"
                   alt="" class="star-icon"/>
            {{/each}}
            {{#each place.halfStarIcons}}
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/star_half/v17/24px.svg"
                   alt="" class="star-icon"/>
            {{/each}}
            {{#each place.emptyStarIcons}}
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/star_outline/v9/24px.svg"
                   alt="" class="star-icon"/>
            {{/each}}
          </span>
        {{/if}}
        {{#if place.user_ratings_total}}
          <a href="{{place.url}}" target="_blank">{{place.user_ratings_total}} reviews</a>
        {{else}}
          <a href="{{place.url}}" target="_blank">See on Google Maps</a>
        {{/if}}
        {{#if place.price_level}}
          &bull;
          <span class="price-dollars">
            {{#each place.dollarSigns}}${{/each}}
          </span>
        {{/if}}
      </div>
      <hr/>
      {{#if place.opening_hours}}
        <div class="hours contact">
          <img src="https://fonts.gstatic.com/s/i/googlematerialicons/schedule/v12/24px.svg"
               alt="Opening hours" class="icon"/>
          <div class="right">
            {{#each place.openingHoursSummary}}
              <div>
                <span class="weekday">{{days}}</span>
                <span class="hours">{{hours}}</span>
              </div>
            {{/each}}
          </div>
        </div>
      {{/if}}
      {{#if place.website}}
        <div class="website contact">
          <img src="https://fonts.gstatic.com/s/i/googlematerialicons/public/v10/24px.svg"
               alt="Website" class="icon"/>
          <div class="right">
            <a href="{{place.website}}">{{place.websiteDomain}}</a>
          </div>
        </div>
      {{/if}}
      {{#if place.formatted_phone_number}}
        <div class="phone contact">
          <img src="https://fonts.gstatic.com/s/i/googlematerialicons/phone/v10/24px.svg"
               alt="Phone number" class="icon"/>
          <div class="right">
            {{place.formatted_phone_number}}
          </div>
        </div>
      {{/if}}
      {{#if place.html_attributions}}
        {{#each place.html_attributions}}
          <p class="attribution">{{{this}}}</p>
        {{/each}}
      {{/if}}
    </script>
  </head>
  <body>
    <div id="map-container">
      <div id="locations-panel">
        <div id="locations-panel-list">
          <div class="section-name" id="location-results-section-name">
            All locations
          </div>
          <div class="results">
            <ul id="location-results-list"></ul>
          </div>
        </div>
        <div id="locations-panel-details"></div>
      </div>
      <div id="map"></div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwqTfd_3XagwO3Oa48yGOFC1dlojOHCl8&callback=initMap&libraries=places&channel=GMPSB_locatorplus_v2_cE" async defer></script>
  </body>
</html>