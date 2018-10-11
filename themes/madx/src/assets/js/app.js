import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';
import autoPosts from '../components/autoPosts.js';
import safetyFilmTypes from '../components/safetyFilmTypes.js';
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
import maduVideoModal from '../components/maduVideoModal.js';


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

// Limit words displayed
Vue.filter('changeSlug',function (text){
  if (text == 'safety-security') {
    var textSplit = text.split('-').join(" & ");
  }else{
    var textSplit = text.split('-').join(" ");
  }
  return textSplit;
});

// Display importance
Vue.filter('importance',function (total){
	let value = '';
  switch(true){
    case(total < 40):
      value = 'Low';
      break;
    case(total < 70):
      value = 'Medium';
      break;
    case(total < 101):
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
})

// Add foundation 6 reveal functionality to an element
Vue.directive('accordion', {
    bind: function (el) {
      new Foundation.Accordion($(el))
    },
})

// Add foundation 6 tabs functionality to an element
Vue.directive('tabs', {
    bind: function (el) {
      new Foundation.Tabs($(el))
    },
})

var newVue = new Vue({
  el: '#app',
  components:{
  	'auto-posts'              : autoPosts,
  	'safety-film-types'       : safetyFilmTypes,
  	'tax-term-posts'          : taxTermPosts,
    'find-dealer-form'        : findDealerForm,
    'film-selector'           : filmSelector,
    'safety-posts'            : safetyPosts,
    'specialty-industries'    : specialtyIndustries,
    'case-studies'            : caseStudies,
    'decorative-posts'        : decorativePosts,
    'specialty-products'      : specialtyProducts,
    'specialty-products-home' : specialtyProductsHome,
    'find-dealer-page'        : findDealerPage,
    'find-dealer-modal'       : findDealerModal,
    'faqs'                    : faqs,
  	'madu-video-modal'        : maduVideoModal,
  },
  created(){
  	$(document).foundation();
  },
  mounted(){
  	if (location.href.includes('protectionpro')) {
      this.protectionProCarousel();
    }
  },
  methods: {
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
      let id = event.target.hash;
      $(event.target).addClass('is-active');
      $('#tabs-content').find('.tabs-panel').removeClass('is-active');
      $(id).addClass('is-active');
    }

  }
});
