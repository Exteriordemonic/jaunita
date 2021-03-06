// import external dependencies
import 'jquery';
import AOS from 'aos';

// import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// import Components
import Toggle from './components/toggle';
import Hero from './components/hero';
import Testimonials from './components/testimonials';
import Map from './components/map';
import SmallMap from './components/small-map';
import Header from './components/header';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();

  setTimeout(() => {
    Toggle.init();
    Hero.init();
    Testimonials.init();
    Map.init();
    SmallMap.init();
    Header.init();

    window.dispatchEvent(new Event('resize'));
    AOS.init();
  }, 300)
});
