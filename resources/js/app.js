import "./bootstrap";
import $ from 'jquery';

window.$ = $;
window.jQuery = $;

// Alpine.js is now handling Select2 initialization in the templates
// This ensures jQuery is available globally for Alpine.js to use
