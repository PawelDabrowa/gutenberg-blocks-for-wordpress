import './style.scss';
import $ from 'jquery';
// const $ = jQuery;

$(document).on("click", ".wp-block-fox-theme-blocks-secondblock", () => {
    alert(true);
    console.log('dziala');
})
