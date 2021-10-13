
$(function (){
  /**
   * @param {HTMLElement} elem
   * @param {number} sec
   */
  window.closeAfterSec = function (elem , sec){
    console.log(elem);
    return $(elem).delay(sec*1000).fadeOut('fast');
  }
  'use strict';


  // $('.pt-1').peity('line');

  $('.pt-1').sparkline('html', {
    lineColor: 'rgba(255, 255, 255, 0.6)',
    lineWidth: 2,
    spotColor: false,
    minSpotColor: false,
    maxSpotColor: false,
    highlightSpotColor: null,
    highlightLineColor: null,
    fillColor: 'rgba(255, 255, 255, 0.2)',
    chartRangeMin: 0,
    chartRangeMax: 20,
    width: '100%',
    height: 30,
    disableTooltips: true
  });
  // card chart end

});
