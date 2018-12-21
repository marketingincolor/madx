// import 'babel-polyfill';
import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';
import autoPosts from '../components/autoPosts.js';
import taxTermPosts from '../components/taxTermPosts.js';
import findDealerForm from '../components/findDealerForm.js';
import findDealerPage from '../components/findDealerPage.js';
import filmSelector from '../components/filmSelector.js';
import safetyPosts from '../components/safetyPosts.js';
import specialtyIndustries from '../components/specialtyIndustries.js';
import caseStudies from '../components/caseStudies.js';
import decorativePosts from '../components/decorativePosts.js';
import specialtyProducts from '../components/specialtyProducts.js';
import specialtyProductsHome from '../components/specialtyProductsHome.js';
import findDealerModal from '../components/findDealerModal.js';
import faqs from '../components/faqs.js';
import taxonomyFaqs from '../components/taxonomyFaqs.js';
import residentialFilmSelector from '../components/residentialFilmSelector.js';
import maduVideoModal from '../components/maduVideoModal.js';
import jotForm from '../components/jotForm.js';


// GLOBAL FILTERS

// Limit words displayed
Vue.filter('limitWords',function (textToLimit,wordLimit){
	var textArray  = textToLimit.split(' ');
	var totalWords = textArray.length;
	var LimitedTextArray = [];

	if (totalWords < wordLimit) {
		return textToLimit
	}else{
		for(var i = 0;i < wordLimit;i++){
			LimitedTextArray.push(textArray[i]);
		}
		return LimitedTextArray.join(' ') + '...';
	}
});

// Display importance to user
Vue.filter('userImportance',function (total){
  let value = '';
  switch(true){
    case(total <= 39):
      value = 'Low';
      break;
    case(total <= 69):
      value = 'Medium';
      break;
    case(total <= 100):
      value = 'High';
      break;
  }
  return value;
});

// Limit words displayed
Vue.filter('changeSlug',function (text){
  if (text == 'safety-security') {
    var textSplit = text.split('-').join(" & ");
  }else{
    var textSplit = text.split('-').join(" ");
  }
  return textSplit;
});

// Display auto importance
Vue.filter('importance',function (total){
  let value = '';
  switch(true){
    case(total <= 55):
      value = 'Low';
      break;
    case(total <= 100):
      value = 'High';
      break;
  }
  return value;
});

// Display safety importance
Vue.filter('safetyImportance',function (total){
	let value = '';
  switch(true){
    case(total <= 59):
      value = 'Low';
      break;
    case(total <= 79):
      value = 'Medium';
      break;
    case(total <= 100):
      value = 'High';
      break;
  }
  return value;
});

// CUSTOM DIRECTIVES

// Add foundation 6 dropdown hover menu functionality to an element
Vue.directive('dropdown', {
  bind: function (el) {
    new Foundation.DropdownMenu($(el));
  }
});

// Add foundation 6 dropdown click functionality to an element
Vue.directive('drop-click', {
  bind: function (el) {
    new Foundation.Dropdown($(el));
  }
});

// Add foundation 6 input slider functionality to an element
Vue.directive('slider', {
  bind: function (el) {
    new Foundation.Slider($(el));
  }
});

// Add foundation 6 orbit functionality to an element
Vue.directive('f-orbit', {
    bind: function (el) {
      new Foundation.Orbit($(el))
    },
    unbind: function (el) {
        $(el).foundation.destroy()
    }
});

// Add foundation 6 reveal functionality to an element
Vue.directive('reveal', {
    bind: function (el) {
      new Foundation.Reveal($(el))
    },
});

// Add foundation 6 reveal functionality to an element
Vue.directive('accordion', {
    bind: function (el) {
      new Foundation.Accordion($(el))
    },
});

// Add foundation 6 tabs functionality to an element
Vue.directive('tabs', {
    bind: function (el) {
      new Foundation.Tabs($(el))
    },
});

// Add foundation 6 tabs functionality to an element
Vue.directive('tooltip', {
    bind: function (el) {
      new Foundation.Tooltip($(el))
    },
});

var newVue = new Vue({
  el: '#app',
  components:{
  	'auto-posts'               : autoPosts,
  	'tax-term-posts'           : taxTermPosts,
    'find-dealer-form'         : findDealerForm,
    'film-selector'            : filmSelector,
    'safety-posts'             : safetyPosts,
    'specialty-industries'     : specialtyIndustries,
    'case-studies'             : caseStudies,
    'decorative-posts'         : decorativePosts,
    'specialty-products'       : specialtyProducts,
    'specialty-products-home'  : specialtyProductsHome,
    'find-dealer-page'         : findDealerPage,
    'find-dealer-modal'        : findDealerModal,
    'faqs'                     : faqs,
    'taxonomy-faqs'            : taxonomyFaqs,
  	'residential-film-selector': residentialFilmSelector,
    'madu-video-modal'         : maduVideoModal,
  	'jot-form'                 : jotForm,
  },
  created(){
  	$(document).foundation();
    this.runIEpolyfills();
    // Hide a language from navbar until it is translated
    let listItems = document.querySelectorAll('a[href="/ar/international"');
    listItems.forEach(function(item){
      item.parentElement.style.display = "none";
    });

  },
  mounted(){
    this.menuDropdown();
    this.closeMobileMenuOutside();
    this.validateForms();
    if (location.href.includes('protectionpro')) {
      this.protectionProCarousel();
    }
  },
  methods: {
    closeMobileMenuOutside: function(){
      let $this = this;
      $('section').on('click',function(){
        $this.mobileLeftMenuClose();
      });
    },
    mobileLeftMenuOpen: function(){
      let menu = document.getElementById('mobile-left-menu');
      let body = document.getElementsByTagName('body')[0];

      menu.classList.add('mobile-menu-open');
      body.classList.add('no-scroll');
    },
    mobileLeftMenuClose: function(){
      let menu = document.getElementById('mobile-left-menu');
      let body = document.getElementsByTagName('body')[0];

      menu.classList.remove('mobile-menu-open');
      body.classList.remove('no-scroll');
    },
    mobileMenuSearch: function(){
      // Toggle between search icon and X icon in mobile header
      let searchToggle = document.getElementById('search-toggle');
      let searchIcon   = searchToggle.querySelector('.fa-search')
      let exitIcon     = searchToggle.querySelector('.fa-times')

      if (searchToggle.getAttribute('aria-open') === 'false') {
        searchToggle.setAttribute('aria-open',true);
        searchIcon.classList.add('hide');
        exitIcon.classList.remove('hide');
      }else{
        searchToggle.setAttribute('aria-open',false);
        searchIcon.classList.remove('hide');
        exitIcon.classList.add('hide');
      }
    },
    protectionProCarousel: function(){
      $('.full-body-carousel').owlCarousel({
        items:1,
        loop:false,
        center:true,
        margin:0,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        animateOut: 'fadeOut',
        animateIn: 'fadeIn'
      });
      $('.orbit-slide').find('a').on('click',function(){
        $('.orbit-slide').find('img').removeClass('active-swatch');
        $(this).find('img').addClass('active-swatch');
      });
    },
    openDistributionTab: function(event){
      var id;
      if (event.target.nodeName.toLowerCase() == "a") {
        id = event.target.hash;
      }else if(event.target.nodeName.toLowerCase() == "img"){
        id = event.target.parentElement.hash;
      }else if(event.target.nodeName.toLowerCase() == "select"){
        id = $('select.is-active').find('option:selected').val();
        console.log(id)
      }
      $(event.target).addClass('is-active');
      $('#tabs-content').find('.tabs-panel').removeClass('is-active');
      $(id).addClass('is-active');
    },
    openProductTab: function(event){
      let id = $('#product-list').find('option:selected').val();
      console.log(id)
      
      $('#tabs-content').find('.tabs-panel').removeClass('is-active');
      $(id).addClass('is-active');
    },
    runIEpolyfills: function(){
      // .includes() polyfill for Internet Explorer
      if (!String.prototype.includes) {
        String.prototype.includes = function(search, start) {
          'use strict';
          if (typeof start !== 'number') {
            start = 0;
          }
          
          if (start + search.length > this.length) {
            return false;
          } else {
            return this.indexOf(search, start) !== -1;
          }
        }
      }
    },
    menuDropdown: function(){
      // Change foundation hover menus to slide down
      $(".dropdown").on('show.zf.dropdownmenu', function (ev, $el) {
        $el.css({"display": "none"})
           .fadeIn(300);
      });

      $(".dropdown").on('hide.zf.dropdownmenu', function (ev, $el) {
        $el.children("ul")
           .css('display', 'inherit')
           .fadeOut(200);
      });
    },
    testingSlideDown: function(){
      let testing = document.getElementById('testing');
      let learnMore = testing.querySelector('.learn-more');
      let testingContent = document.getElementById('testing-content');
      let open;

      if (testing.classList.contains('slide-down')){
        open = true;
      }else{
        open = false;
      }

      if (open == false) {
        testing.classList.add('slide-down');
        testingContent.querySelector('.hide').classList.remove('hide');
        open = true;
      }else{
        testing.classList.remove('slide-down');
        testingContent.querySelectorAll('p')[2].classList.add('hide');
        open = false;
      }
    },
    validateForms: function(){
      $('.jotform-form').find('input,textarea,select').on('keyup change',function(){
        let $this = $(this);

        if ($this.val().length > 0 && $this.is(':valid')) {
          $this.addClass('validInput');
        }else{
          $this.removeClass('validInput');
        }
      });
    }
  }
});
