/* eslint-disable */

const loadGoogleMapsApi = require("load-google-maps-api");
// import mapStyle from "../util/mapStyle";

const CONFIG = {
  ELEM: "[small-google-map]"
};

const map = {
  init() {
    const {
      ELEM
    } = CONFIG;

    this.elem = document.querySelector(ELEM);

    if (this.elem) {
      this.pins = JSON.parse(this.elem.dataset.pins);
      console.log("Init Google Map: ", this.pins);
      this.initMap();
    }
  },

  initMap() {
    const elem = this.elem;
    const pins = this.pins;

    const offset = 0;

    loadGoogleMapsApi({
        key: "AIzaSyAiRSDRuwno3OGIcmHUu-rXNs9u3Uhdr-g"
      })
      .then(function (googleMaps) {
        let map;
        if (pins[1]) {
          map = new googleMaps.Map(elem, {
            center: {
              lat: pins[0]["pin"]["lat"],
              lng: pins[0]["pin"]["lng"] + offset
            },
            zoom: 15,
            keyboardShortcuts: false,
            styles: mapStyle
          });
        } else {
          map = new googleMaps.Map(elem, {
            center: {
              lat: pins[0]["pin"]["lat"],
              lng: pins[0]["pin"]["lng"] + offset
            },
            zoom: 15,
            keyboardShortcuts: false,
            // styles: mapStyle
          });
        }

        pins.forEach(element => {
          const infoWindow = new google.maps.InfoWindow({
            content: `<div class="contact__tooltip">${element.content}</div>`
          });

          const image = {
            url: element.icon, // url
            scaledSize: new google.maps.Size(50, 50), // scaled size
          };

          const pin = new googleMaps.Marker({
            position: {
              lat: Number(element.pin.lat),
              lng: Number(element.pin.lng)
            },
            map: map,
            title: element.title,
            icon: image
          });

          googleMaps.event.addListener(pin, "click", function () {
            infoWindow.open(map, pin);
          });

          console.log(pin);
        });
      })
      .catch(function (error) {
        console.error(error);
      });
  }
};

export default map;
