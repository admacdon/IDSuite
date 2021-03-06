/**
 * Created by amac on 6/24/17.
 */

$( "#insights" ).click(function() {


    $('#contacts-a').addClass('blue');
    $('#contacts-a').removeClass('active active-outline-tab-blue text-white');

    $('#locations-a').addClass('teal');
    $('#locations-a').removeClass('active active-outline-tab-teal text-white');

    $('#notes-a').addClass('yellow');
    $('#notes-a').removeClass('active active-outline-tab-yellow text-white');

    $("#insights-a").addClass('active active-outline-tab-pink text-white');

    $('#account-card-header').removeClass('active-outline-card-header-teal');
    $('#account-card-header').removeClass('active-outline-card-header-blue');
    $('#account-card-header').removeClass('active-outline-card-header-yellow');

    $('#account-card-header').addClass('active-outline-card-header-pink');

    $('#account-card-block-locations-tab').removeClass('active');
    $('#account-card-block-contacts-tab').removeClass('active');
    $('#account-card-block-notes-tab').removeClass('active');

    $('#account-card-block-insights-tab').addClass('active');

    $('#account-card-block-a').removeClass('btn-nav-blue');
    $('#account-card-block-a').removeClass('btn-nav-teal');
    $('#account-card-block-a').removeClass('btn-nav-yellow');

    $('#account-card-block-a').addClass('btn-nav-pink');

    bar_one.set(0);


    bar_two.set(0);

    bar_one.animate(1.0, {to: {color: '#E64759'}});  // Number from 0.0 to 1.0
    bar_two.animate(-1.0, {to: {color: '#E64759'}});  // Number from 0.0 to 1.0

});

$( "#contacts" ).click(function() {

    $('#insights-a').addClass('pink');
    $('#insights-a').removeClass('active active-outline-tab-pink text-white');

    $('#locations-a').addClass('teal');
    $('#locations-a').removeClass('active active-outline-tab-teal text-white');

    $('#notes-a').addClass('yellow');
    $('#notes-a').removeClass('active active-outline-tab-yellow text-white');

    $("#contacts-a").addClass('active active-outline-tab-blue text-white');

    $('#account-card-header').removeClass('active-outline-card-header-teal');
    $('#account-card-header').removeClass('active-outline-card-header-pink');
    $('#account-card-header').removeClass('active-outline-card-header-yellow');

    $('#account-card-header').addClass('active-outline-card-header-blue');

    $('#account-card-block-locations-tab').removeClass('active');
    $('#account-card-block-insights-tab').removeClass('active');
    $('#account-card-block-notes-tab').removeClass('active');

    $('#account-card-block-contacts-tab').addClass('active');

    $('#account-card-block-a').removeClass('btn-nav-pink');
    $('#account-card-block-a').removeClass('btn-nav-teal');
    $('#account-card-block-a').removeClass('btn-nav-yellow');

    $('#account-card-block-a').addClass('btn-nav-blue');


    bar_one.set(0);

    bar_two.set(0);

    bar_one.animate(1.0, {to: {color: '#1ca8dd'}});  // Number from 0.0 to 1.0
    bar_two.animate(-1.0, {to: {color: '#1ca8dd'}});  // Number from 0.0 to 1.0

});

$( "#locations" ).click(function() {

    $('#insights-a').addClass('pink');
    $('#insights-a').removeClass('active active-outline-tab-pink text-white');

    $('#contacts-a').addClass('blue');
    $('#contacts-a').removeClass('active active-outline-tab-blue text-white');

    $('#notes-a').addClass('yellow');
    $('#notes-a').removeClass('active active-outline-tab-yellow text-white');

    $("#locations-a").addClass('active active-outline-tab-teal text-white');

    $('#account-card-header').removeClass('active-outline-card-header-pink');
    $('#account-card-header').removeClass('active-outline-card-header-blue');
    $('#account-card-header').removeClass('active-outline-card-header-yellow');

    $('#account-card-header').addClass('active-outline-card-header-teal');

    $('#account-card-block-insights-tab').removeClass('active');
    $('#account-card-block-contacts-tab').removeClass('active');
    $('#account-card-block-notes-tab').removeClass('active');

    $('#account-card-block-locations-tab').addClass('active');

    $('#account-card-block-a').removeClass('btn-nav-pink');
    $('#account-card-block-a').removeClass('btn-nav-blue');
    $('#account-card-block-a').removeClass('btn-nav-yellow');

    $('#account-card-block-a').addClass('btn-nav-teal');



    bar_one.set(0);
    // bar_one.to({color: '#1BC98E'});

    bar_two.set(0);
    // bar_two.to({color: '#1BC98E'});

    bar_one.animate(1.0, {to: {color: '#1BC98E'}});  // Number from 0.0 to 1.0
    bar_two.animate(-1.0, {to: {color: '#1BC98E'}});  // Number from 0.0 to 1.0

});


$( "#notes" ).click(function() {

    $('#insights-a').addClass('pink');
    $('#insights-a').removeClass('active active-outline-tab-pink text-white');

    $('#contacts-a').addClass('blue');
    $('#contacts-a').removeClass('active active-outline-tab-blue text-white');

    $('#locations-a').addClass('teal');
    $('#locations-a').removeClass('active active-outline-tab-teal text-white');

    $("#notes-a").addClass('active active-outline-tab-yellow text-white');

    $('#account-card-header').removeClass('active-outline-card-header-pink');
    $('#account-card-header').removeClass('active-outline-card-header-blue');
    $('#account-card-header').removeClass('active-outline-card-header-teal');

    $('#account-card-header').addClass('active-outline-card-header-yellow');

    $('#account-card-block-insights-tab').removeClass('active');
    $('#account-card-block-contacts-tab').removeClass('active');
    $('#account-card-block-locations-tab').removeClass('active');

    $('#account-card-block-notes-tab').addClass('active');

    $('#account-card-block-a').removeClass('btn-nav-pink');
    $('#account-card-block-a').removeClass('btn-nav-blue');
    $('#account-card-block-a').removeClass('btn-nav-teal');

    $('#account-card-block-a').addClass('btn-nav-yellow');



    bar_one.set(0);
    // bar_one.to({color: '#1BC98E'});

    bar_two.set(0);
    // bar_two.to({color: '#1BC98E'});

    bar_one.animate(1.0, {to: {color: '#E4D836'}});  // Number from 0.0 to 1.0
    bar_two.animate(-1.0, {to: {color: '#E4D836'}});  // Number from 0.0 to 1.0

});



var bar_one = new ProgressBar.Line(container_one, {
    strokeWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    color: '#fff',
    trailColor: 'transparent',
    trailWidth: 1,
    svgStyle: { width: '100%', height: '100%' },
    from: { color: '#fff' },
    to: { color: '#E64759' },
    step: function step(state, bar) {
        bar.path.setAttribute('stroke', state.color);
    }
});

var bar_two = new ProgressBar.Line(container_two, {
    strokeWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    color: '#fff',
    trailColor: 'transparent',
    trailWidth: 1,
    svgStyle: { width: '100%', height: '100%' },
    from: { color: '#fff' },
    to: { color: '#E64759' },
    step: function step(state, bar) {
        bar.path.setAttribute('stroke', state.color);
    }
});

bar_one.animate(1.0); // Number from 0.0 to 1.0
bar_two.animate(-1.0); // Number from 0.0 to 1.0