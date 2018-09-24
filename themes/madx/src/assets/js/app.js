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
import filmSelector from '../components/filmSelector.js';



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
    case(total < 5):
      value = 'Low';
      break;
    case(total < 8):
      value = 'Medium';
      break;
    case(total < 11):
      value = 'High';
      break;
  }
  return value;
});

// CUSTOM DIRECTIVES

// Add foundation 6 dropdown menu functionality to an element
Vue.directive('dropdown', {
  bind: function (el) {
    new Foundation.DropdownMenu($(el));
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
})

var newVue = new Vue({
  el: '#app',
  components:{
  	'auto-posts': autoPosts,
  	'safety-film-types': safetyFilmTypes,
  	'tax-term-posts': taxTermPosts,
    'find-dealer-form': findDealerForm,
  	'film-selector': filmSelector,
  },
  created(){
  	$(document).foundation();
  },
  mounted(){
  	
  },
  methods: {

  }
});
