<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";s:144002:"/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,300");
/* ========================================================================
   Component: Normalize
 ========================================================================== */
/* Base
 ========================================================================== */
/*
 * 1. Sets default font family to sans-serif.
 * 2. Prevents iOS text size adjust after orientation change, without disabling user zoom.
 */
html {
  /* 1 */
  font-family: sans-serif;
  /* 2 */
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
/*
 * Removes default margin.
 */
body {
  margin: 0;
}
/* HTML5 display definitions
 ========================================================================== */
/*
 * Corrects `block` display not defined in IE 8/9.
 */
article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
nav,
section,
summary {
  display: block;
}
/*
 * 1. Correct `inline-block` display not defined in IE 8/9.
 * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
 */
audio,
canvas,
progress,
video {
  /* 1 */
  display: inline-block;
  /* 2 */
  vertical-align: baseline;
}
/*
 * Prevents modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */
audio:not([controls]) {
  display: none;
  height: 0;
}
/*
 * Address `[hidden]` styling not present in IE 8/9.
 * Hide the `template` element in IE, Safari, and Firefox < 22.
 */
[hidden],
template {
  display: none;
}
/* Links
 ========================================================================== */
/*
 * Remove the gray background color from active links in IE 10.
 */
a {
  background: transparent;
}
/*
 * Improves readability when focused and also mouse hovered in all browsers.
 */
a:active,
a:hover {
  outline: 0;
}
/* Text-level semantics
 ========================================================================== */
/*
 * Addresses styling not present in IE 8/9, Safari 5, and Chrome.
 */
abbr[title] {
  border-bottom: 1px dotted;
}
/*
 * Addresses style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
 */
b,
strong {
  font-weight: bold;
}
/*
 * Addresses styling not present in Safari 5 and Chrome.
 */
dfn {
  font-style: italic;
}
/*
 * Addresses inconsistent and variable font size in all browsers.
 */
small {
  font-size: 80%;
}
/*
 * Prevents `sub` and `sup` affecting `line-height` in all browsers.
 */
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
/* Embedded content
 ========================================================================== */
/*
 * Removes border when inside `a` element in IE 8/9.
 */
img {
  border: 0;
}
/*
 * Corrects overflow displayed oddly in IE 9.
 */
svg:not(:root) {
  overflow: hidden;
}
/* Grouping content
 ========================================================================== */
/*
 * Addresses margin not present in IE 8/9 and Safari 5.
 */
figure {
  margin: 0;
}
/*
 * Address differences between Firefox and other browsers.
 */
hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
/*
 * Contain overflow in all browsers.
 */
pre {
  overflow: auto;
}
/*
 * Address odd `em`-unit font size rendering in all browsers.
 * 1. Consolas has a better baseline in running text compared to `Courier`
 */
code,
kbd,
pre,
samp {
  font-size: 1em;
  /* 1 */
  font-family: Consolas, monospace, serif;
}
/* Forms
 ========================================================================== */
/*
 * 1. Correct color not being inherited. Known issue: affects color of disabled elements.
 * 2. Correct font properties not being inherited.
 * 3. Address margins set differently in Firefox 4+, Safari 5, and Chrome.
 * 4. Define consistent box sizing
 *    Defaults:   `button`, `input` and `textarea` have box sizing set to `content-box`
 *                `select`, `input[type="checkbox"]` and `input[type="radio"]` have box sizing set to `border-box`
 *    Exceptions: `input[type="checkbox"]` and `input[type="radio"]` have box sizing set to `content-box` in IE 8/9.
 *                `input[type="search"]` has box sizing set to `border-box` in Safari 5 and Chrome.
 */
button,
input,
optgroup,
select,
textarea {
  /* 1 */
  color: inherit;
  /* 2 */
  font: inherit;
  /* 3 */
  margin: 0;
  /* 4 */
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
/**
 * Don't inherit the `font-weight` (applied by a rule above).
 * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
 */
optgroup {
  font-weight: bold;
}
/**
 * Address `overflow` set to `hidden` in IE 8/9/10.
 */
button {
  overflow: visible;
}
/*
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Firefox, IE 8+, and Opera
 * Correct `select` style inheritance in Firefox.
 */
button,
select {
  text-transform: none;
}
/*
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio` and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type `input` and others.
 */
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  /* 2 */
  -webkit-appearance: button;
  /* 3 */
  cursor: pointer;
}
/*
 * Re-set default cursor for disabled elements.
 */
button:disabled,
html input:disabled {
  cursor: default;
}
/*
 * Removes inner padding and border in Firefox 4+.
 */
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
/*
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in the UA stylesheet.
 */
input {
  line-height: normal;
}
/*
 * 1. Removes excess padding in IE 8/9.
 * 2. Improves consistency of cursor style for clickable elements
 */
input[type="checkbox"],
input[type="radio"] {
  /* 1 */
  padding: 0;
  /* 2 */
  cursor: pointer;
}
/*
 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
 * `font-size` values of the `input`, it causes the cursor style of the
 * decrement button to change from `default` to `text`.
 */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
/*
 * Addresses `appearance` set to `searchfield` in Safari 5 and Chrome.
 */
input[type="search"] {
  -webkit-appearance: textfield;
}
/*
 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
 * Safari (but not Chrome) clips the cancel button when the search input has
 * padding (and `textfield` appearance).
 */
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
/*
 * Define consistent border, margin, and padding.
 */
fieldset {
  border: none;
  margin: 0;
  padding: 0;
}
/*
 * 1. Corrects color not being inherited in IE 8/9.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */
legend {
  /* 1 */
  border: 0;
  /* 2 */
  padding: 0;
}
/**
 * 1. Remove default vertical scrollbar in IE 8/9.
 * 2. Improve readability and alignment in all browsers.
 */
textarea {
  overflow: auto;
  /* 1 */
  vertical-align: top;
  /* 2 */
}
/*
 * Removes placeholder transparency in Firefox.
 */
::-moz-placeholder {
  opacity: 1;
}
/* Tables
 ========================================================================== */
/*
 * Remove most spacing between table cells.
 */
table {
  border-collapse: collapse;
  border-spacing: 0;
}
/* ========================================================================
   Component: Base
 ========================================================================== */
/* Body
 ========================================================================== */
/*
 * `font-size` is set in `html` element to support the `rem` unit for font-sizes
 */
html {
  font-size: 14px;
}
body {
  background: #ffffff;
  font-family: 'Open Sans';
  font-weight: normal;
  line-height: 20px;
  color: #444444;
}
/* Text-level semantics
 ========================================================================== */
/*
 * Links
 */
a,
.uk-link {
  color: #1fa2d6;
  text-decoration: none;
  cursor: pointer;
}
a:hover,
.uk-link:hover {
  color: #0074a2;
  text-decoration: underline;
}
/*
 * Emphasize
 */
em {
  color: #dd0055;
}
/*
 * Insert
 */
ins {
  background: #ffffaa;
  color: #444444;
  text-decoration: none;
}
/*
 * Mark
 * Note: Addresses styling not present in IE 8/9.
 */
mark {
  background: #ffffaa;
  color: #444444;
}
/*
 * Selection highlight
 */
::-moz-selection {
  background: #1fa2d6;
  color: #ffffff;
  text-shadow: none;
}
::selection {
  background: #1fa2d6;
  color: #ffffff;
  text-shadow: none;
}
/*
 * Abbreviation and definition
 */
abbr[title],
dfn[title] {
  cursor: help;
}
dfn[title] {
  border-bottom: 1px dotted;
  font-style: normal;
}
/* Embedded content
 ========================================================================== */
/*
 * 1. Corrects max-width behavior (2.) if padding and border are used
 * 2. Responsiveness: Sets a maximum width relative to the parent and auto scales the height
 * 3. Remove the gap between images and the bottom of their containers
 */
img {
  /* 1 */
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  /* 2 */
  max-width: 100%;
  height: auto;
  /* 3 */
  vertical-align: middle;
}
/*
 * Preserve original image dimensions
 * 1. Fix Google maps automatically via URL detection
 */
.uk-img-preserve,
.uk-img-preserve img,
img[src*="maps.gstatic.com"],
img[src*="googleapis.com"] {
  max-width: none;
}
/* Spacing for block elements
 ========================================================================== */
p,
hr,
ul,
ol,
dl,
blockquote,
pre,
address,
fieldset,
figure {
  margin: 0 0 20px 0;
}
/*
 * Don't worry about the universal selector.
 * There is no mentionable performance impact.
 */
* + p,
* + hr,
* + ul,
* + ol,
* + dl,
* + blockquote,
* + pre,
* + address,
* + fieldset,
* + figure {
  margin-top: 20px;
}
/* Headings
 ========================================================================== */
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0 0 20px 0;
  font-family: 'Open Sans';
  font-weight: 300;
  color: #444444;
  text-transform: none;
}
/*
 * Don't worry about the universal selector.
 * There is no mentionable performance impact.
 */
* + h1,
* + h2,
* + h3,
* + h4,
* + h5,
* + h6 {
  margin-top: 25px;
}
h1,
.uk-h1 {
  font-size: 40px;
  line-height: 50px;
}
h2,
.uk-h2 {
  font-size: 32px;
  line-height: 40px;
}
h3,
.uk-h3 {
  font-size: 24px;
  line-height: 30px;
}
h4,
.uk-h4 {
  font-size: 18px;
  line-height: 24px;
}
h5,
.uk-h5 {
  font-size: 14px;
  line-height: 20px;
}
h6,
.uk-h6 {
  font-size: 12px;
  line-height: 18px;
}
/* Lists
 ========================================================================== */
/*
 * Ordered and unordered lists
 */
ul,
ol {
  padding-left: 30px;
}
/* Reset margin for nested lists */
ul > li > ul,
ul > li > ol,
ol > li > ol,
ol > li > ul {
  margin: 0;
}
/*
 * Description lists
 */
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
/* Horizontal rule
 ========================================================================== */
hr {
  display: block;
  padding: 0;
  border: 0;
  border-top: 1px solid #dddddd;
}
/* Address
 ========================================================================== */
address {
  font-style: normal;
}
/* Quotes
 ========================================================================== */
q,
blockquote {
  font-style: italic;
}
blockquote {
  padding-left: 15px;
  border-left: 5px solid #dddddd;
  font-size: 16px;
  line-height: 22px;
}
/* Small print for identifying the source */
blockquote small {
  display: block;
  color: #999999;
  font-style: normal;
}
/* Smaller margin if `small` follows */
blockquote p:last-of-type {
  margin-bottom: 5px;
}
/* Code and preformatted text
 ========================================================================== */
code {
  color: #dd0055;
  font-size: 12px;
  white-space: nowrap;
}
/* Reset code elements if parent of pre elements */
pre code {
  color: inherit;
  white-space: pre-wrap;
}
pre {
  padding: 10px;
  background: #f5f5f5;
  color: #444444;
  font-size: 12px;
  line-height: 18px;
  -moz-tab-size: 4;
  tab-size: 4;
}
/* Forms
 ========================================================================== */
/*
 * Vertical alignment
 * Exclude `radio` and `checkbox` elements because the default `baseline` value aligns better with text
 */
button,
input:not([type="radio"]):not([type="checkbox"]),
select {
  vertical-align: middle;
}
/* Iframe
 ========================================================================== */
iframe {
  border: 0;
}
/* Fix viewport for IE10 snap mode
 ========================================================================== */
@media screen and (max-width: 400px) {
  @-ms-viewport {
    width: device-width;
  }
}
/* ========================================================================
   Component: Grid
 ========================================================================== */
/*
 * Micro clearfix
 */
.uk-grid:before,
.uk-grid:after {
  content: " ";
  display: table;
}
.uk-grid:after {
  clear: both;
}
/*
 * 1. Needed for the gutter
 * 2. Makes grid more robust so that it can be used with other block elements like lists
 */
.uk-grid {
  /* 1 */
  margin: 0 0 0 -25px;
  /* 2 */
  padding: 0;
  list-style: none;
}
/*
 * Grid cell
 * 1. Makes grid more robust so that it can be used with other block elements
 * 2. Create horizontal gutter
 * 3. `float` is set by default so columns always behave the same and create a new block format context
 */
.uk-grid > * {
  /* 1 */
  margin: 0;
  /* 2 */
  padding-left: 25px;
  /* 3 */
  float: left;
}
/*
 * Remove margin from the last-child
 */
.uk-grid > * > :last-child {
  margin-bottom: 0;
}
/* Grid gutter
 ========================================================================== */
/*
 * Vertical gutter
 */
.uk-grid + .uk-grid {
  margin-top: 25px;
}
/*
 * This class is set by JavaScript and applies a vertical gutter if the columns stack or float into the next row
 * Higher specificity to override margin
 */
.uk-grid > .uk-grid-margin {
  margin-top: 25px;
}
/*
 * Vertical gutter for panels
 */
.uk-grid > * > .uk-panel + .uk-panel {
  margin-top: 25px;
}
/*
 * Larger gutter for large screens
 */
/* Large screen and bigger */
@media (min-width: 1220px) {
  /* Horizontal gutter */
  .uk-grid:not(.uk-grid-preserve) {
    margin-left: -35px;
  }
  .uk-grid:not(.uk-grid-preserve) > * {
    padding-left: 35px;
  }
  /* Vertical gutter */
  .uk-grid:not(.uk-grid-preserve) + .uk-grid {
    margin-top: 35px;
  }
  .uk-grid:not(.uk-grid-preserve) > .uk-grid-margin {
    margin-top: 35px;
  }
  /* Vertical gutter for panels */
  .uk-grid:not(.uk-grid-preserve) > * > .uk-panel + .uk-panel {
    margin-top: 35px;
  }
}
/*
 * Small gutter
 * Higher specificity to override large gutter
 */
.uk-grid.uk-grid-small {
  margin-left: -10px;
}
.uk-grid.uk-grid-small > * {
  padding-left: 10px;
}
.uk-grid.uk-grid-small + .uk-grid-small {
  margin-top: 10px;
}
.uk-grid.uk-grid-small > .uk-grid-margin {
  margin-top: 10px;
}
.uk-grid.uk-grid-small > * > .uk-panel + .uk-panel {
  margin-top: 10px;
}
/* Modifier: `uk-grid-divider`
 ========================================================================== */
/*
 * Horizontal divider
 * Does not work with `uk-push-*`, `uk-pull-*` and not if the columns float into the next row
 */
.uk-grid-divider:not(:empty) {
  margin-left: -25px;
  margin-right: -25px;
}
.uk-grid-divider > * {
  padding-left: 25px;
  padding-right: 25px;
}
.uk-grid-divider > [class*='uk-width-1-']:not(.uk-width-1-1):nth-child(n+2),
.uk-grid-divider > [class*='uk-width-2-']:nth-child(n+2),
.uk-grid-divider > [class*='uk-width-3-']:nth-child(n+2),
.uk-grid-divider > [class*='uk-width-4-']:nth-child(n+2),
.uk-grid-divider > [class*='uk-width-5-']:nth-child(n+2),
.uk-grid-divider > [class*='uk-width-6-']:nth-child(n+2),
.uk-grid-divider > [class*='uk-width-7-']:nth-child(n+2),
.uk-grid-divider > [class*='uk-width-8-']:nth-child(n+2),
.uk-grid-divider > [class*='uk-width-9-']:nth-child(n+2) {
  border-left: 1px solid #dddddd;
}
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-grid-divider > [class*='uk-width-medium-']:not(.uk-width-medium-1-1):nth-child(n+2) {
    border-left: 1px solid #dddddd;
  }
}
/* Desktop and bigger */
@media (min-width: 960px) {
  .uk-grid-divider > [class*='uk-width-large-']:not(.uk-width-large-1-1):nth-child(n+2) {
    border-left: 1px solid #dddddd;
  }
}
/* Large screen and bigger */
@media (min-width: 1220px) {
  /*
     * Large gutter
     */
  .uk-grid-divider:not(.uk-grid-preserve):not(:empty) {
    margin-left: -35px;
    margin-right: -35px;
  }
  .uk-grid-divider:not(.uk-grid-preserve) > * {
    padding-left: 35px;
    padding-right: 35px;
  }
  .uk-grid-divider:not(.uk-grid-preserve):empty {
    margin-top: 35px;
    margin-bottom: 35px;
  }
}
/*
 * Vertical divider
 */
.uk-grid-divider:empty {
  margin-top: 25px;
  margin-bottom: 25px;
  border-top: 1px solid #dddddd;
}
/* Even grid cell widths
 ========================================================================== */
[class*='uk-grid-width'] > * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
}
.uk-grid-width-1-2 > * {
  width: 50%;
}
.uk-grid-width-1-3 > * {
  width: 33.333%;
}
.uk-grid-width-1-4 > * {
  width: 25%;
}
.uk-grid-width-1-5 > * {
  width: 20%;
}
.uk-grid-width-1-6 > * {
  width: 16.666%;
}
.uk-grid-width-1-10 > * {
  width: 10%;
}
/* Phone landscape and bigger */
@media (min-width: 480px) {
  .uk-grid-width-small-1-2 > * {
    width: 50%;
  }
  .uk-grid-width-small-1-3 > * {
    width: 33.333%;
  }
  .uk-grid-width-small-1-4 > * {
    width: 25%;
  }
  .uk-grid-width-small-1-5 > * {
    width: 20%;
  }
  .uk-grid-width-small-1-6 > * {
    width: 16.666%;
  }
  .uk-grid-width-small-1-10 > * {
    width: 10%;
  }
}
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-grid-width-medium-1-2 > * {
    width: 50%;
  }
  .uk-grid-width-medium-1-3 > * {
    width: 33.333%;
  }
  .uk-grid-width-medium-1-4 > * {
    width: 25%;
  }
  .uk-grid-width-medium-1-5 > * {
    width: 20%;
  }
  .uk-grid-width-medium-1-6 > * {
    width: 16.666%;
  }
  .uk-grid-width-medium-1-10 > * {
    width: 10%;
  }
}
/* Desktop and bigger */
@media (min-width: 960px) {
  .uk-grid-width-large-1-2 > * {
    width: 50%;
  }
  .uk-grid-width-large-1-3 > * {
    width: 33.333%;
  }
  .uk-grid-width-large-1-4 > * {
    width: 25%;
  }
  .uk-grid-width-large-1-5 > * {
    width: 20%;
  }
  .uk-grid-width-large-1-6 > * {
    width: 16.666%;
  }
  .uk-grid-width-large-1-10 > * {
    width: 10%;
  }
}
/* Large screen and bigger */
@media (min-width: 1220px) {
  .uk-grid-width-xlarge-1-2 > * {
    width: 50%;
  }
  .uk-grid-width-xlarge-1-3 > * {
    width: 33.333%;
  }
  .uk-grid-width-xlarge-1-4 > * {
    width: 25%;
  }
  .uk-grid-width-xlarge-1-5 > * {
    width: 20%;
  }
  .uk-grid-width-xlarge-1-6 > * {
    width: 16.666%;
  }
  .uk-grid-width-xlarge-1-10 > * {
    width: 10%;
  }
}
/* Sub-objects: `uk-width-*`
 ========================================================================== */
[class*='uk-width'] {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
}
/*
 * Widths
 */
/* Whole */
.uk-width-1-1 {
  width: 100%;
}
/* Halves */
.uk-width-1-2,
.uk-width-2-4,
.uk-width-3-6,
.uk-width-5-10 {
  width: 50%;
}
/* Thirds */
.uk-width-1-3,
.uk-width-2-6 {
  width: 33.333%;
}
.uk-width-2-3,
.uk-width-4-6 {
  width: 66.666%;
}
/* Quarters */
.uk-width-1-4 {
  width: 25%;
}
.uk-width-3-4 {
  width: 75%;
}
/* Fifths */
.uk-width-1-5,
.uk-width-2-10 {
  width: 20%;
}
.uk-width-2-5,
.uk-width-4-10 {
  width: 40%;
}
.uk-width-3-5,
.uk-width-6-10 {
  width: 60%;
}
.uk-width-4-5,
.uk-width-8-10 {
  width: 80%;
}
/* Sixths */
.uk-width-1-6 {
  width: 16.666%;
}
.uk-width-5-6 {
  width: 83.333%;
}
/* Tenths */
.uk-width-1-10 {
  width: 10%;
}
.uk-width-3-10 {
  width: 30%;
}
.uk-width-7-10 {
  width: 70%;
}
.uk-width-9-10 {
  width: 90%;
}
/* Phone landscape and bigger */
@media (min-width: 480px) {
  /* Whole */
  .uk-width-small-1-1 {
    width: 100%;
  }
  /* Halves */
  .uk-width-small-1-2,
  .uk-width-small-2-4,
  .uk-width-small-3-6,
  .uk-width-small-5-10 {
    width: 50%;
  }
  /* Thirds */
  .uk-width-small-1-3,
  .uk-width-small-2-6 {
    width: 33.333%;
  }
  .uk-width-small-2-3,
  .uk-width-small-4-6 {
    width: 66.666%;
  }
  /* Quarters */
  .uk-width-small-1-4 {
    width: 25%;
  }
  .uk-width-small-3-4 {
    width: 75%;
  }
  /* Fifths */
  .uk-width-small-1-5,
  .uk-width-small-2-10 {
    width: 20%;
  }
  .uk-width-small-2-5,
  .uk-width-small-4-10 {
    width: 40%;
  }
  .uk-width-small-3-5,
  .uk-width-small-6-10 {
    width: 60%;
  }
  .uk-width-small-4-5,
  .uk-width-small-8-10 {
    width: 80%;
  }
  /* Sixths */
  .uk-width-small-1-6 {
    width: 16.666%;
  }
  .uk-width-small-5-6 {
    width: 83.333%;
  }
  /* Tenths */
  .uk-width-small-1-10 {
    width: 10%;
  }
  .uk-width-small-3-10 {
    width: 30%;
  }
  .uk-width-small-7-10 {
    width: 70%;
  }
  .uk-width-small-9-10 {
    width: 90%;
  }
}
/* Tablet and bigger */
@media (min-width: 768px) {
  /* Whole */
  .uk-width-medium-1-1 {
    width: 100%;
  }
  /* Halves */
  .uk-width-medium-1-2,
  .uk-width-medium-2-4,
  .uk-width-medium-3-6,
  .uk-width-medium-5-10 {
    width: 50%;
  }
  /* Thirds */
  .uk-width-medium-1-3,
  .uk-width-medium-2-6 {
    width: 33.333%;
  }
  .uk-width-medium-2-3,
  .uk-width-medium-4-6 {
    width: 66.666%;
  }
  /* Quarters */
  .uk-width-medium-1-4 {
    width: 25%;
  }
  .uk-width-medium-3-4 {
    width: 75%;
  }
  /* Fifths */
  .uk-width-medium-1-5,
  .uk-width-medium-2-10 {
    width: 20%;
  }
  .uk-width-medium-2-5,
  .uk-width-medium-4-10 {
    width: 40%;
  }
  .uk-width-medium-3-5,
  .uk-width-medium-6-10 {
    width: 60%;
  }
  .uk-width-medium-4-5,
  .uk-width-medium-8-10 {
    width: 80%;
  }
  /* Sixths */
  .uk-width-medium-1-6 {
    width: 16.666%;
  }
  .uk-width-medium-5-6 {
    width: 83.333%;
  }
  /* Tenths */
  .uk-width-medium-1-10 {
    width: 10%;
  }
  .uk-width-medium-3-10 {
    width: 30%;
  }
  .uk-width-medium-7-10 {
    width: 70%;
  }
  .uk-width-medium-9-10 {
    width: 90%;
  }
}
/* Desktop and bigger */
@media (min-width: 960px) {
  /* Whole */
  .uk-width-large-1-1 {
    width: 100%;
  }
  /* Halves */
  .uk-width-large-1-2,
  .uk-width-large-2-4,
  .uk-width-large-3-6,
  .uk-width-large-5-10 {
    width: 50%;
  }
  /* Thirds */
  .uk-width-large-1-3,
  .uk-width-large-2-6 {
    width: 33.333%;
  }
  .uk-width-large-2-3,
  .uk-width-large-4-6 {
    width: 66.666%;
  }
  /* Quarters */
  .uk-width-large-1-4 {
    width: 25%;
  }
  .uk-width-large-3-4 {
    width: 75%;
  }
  /* Fifths */
  .uk-width-large-1-5,
  .uk-width-large-2-10 {
    width: 20%;
  }
  .uk-width-large-2-5,
  .uk-width-large-4-10 {
    width: 40%;
  }
  .uk-width-large-3-5,
  .uk-width-large-6-10 {
    width: 60%;
  }
  .uk-width-large-4-5,
  .uk-width-large-8-10 {
    width: 80%;
  }
  /* Sixths */
  .uk-width-large-1-6 {
    width: 16.666%;
  }
  .uk-width-large-5-6 {
    width: 83.333%;
  }
  /* Tenths */
  .uk-width-large-1-10 {
    width: 10%;
  }
  .uk-width-large-3-10 {
    width: 30%;
  }
  .uk-width-large-7-10 {
    width: 70%;
  }
  .uk-width-large-9-10 {
    width: 90%;
  }
}
/* Sub-object: `uk-push-*` and `uk-pull-*`
 ========================================================================== */
/*
 * Source ordering
 * Works only with `uk-width-medium-*`
 */
/* Tablet and bigger */
@media (min-width: 768px) {
  [class*='uk-push-'],
  [class*='uk-pull-'] {
    position: relative;
  }
  /*
     * Push
     */
  /* Halves */
  .uk-push-1-2,
  .uk-push-2-4,
  .uk-push-3-6,
  .uk-push-5-10 {
    left: 50%;
  }
  /* Thirds */
  .uk-push-1-3,
  .uk-push-2-6 {
    left: 33.333%;
  }
  .uk-push-2-3,
  .uk-push-4-6 {
    left: 66.666%;
  }
  /* Quarters */
  .uk-push-1-4 {
    left: 25%;
  }
  .uk-push-3-4 {
    left: 75%;
  }
  /* Fifths */
  .uk-push-1-5,
  .uk-push-2-10 {
    left: 20%;
  }
  .uk-push-2-5,
  .uk-push-4-10 {
    left: 40%;
  }
  .uk-push-3-5,
  .uk-push-6-10 {
    left: 60%;
  }
  .uk-push-4-5,
  .uk-push-8-10 {
    left: 80%;
  }
  /* Sixths */
  .uk-push-1-6 {
    left: 16.666%;
  }
  .uk-push-5-6 {
    left: 83.333%;
  }
  /* Tenths */
  .uk-push-1-10 {
    left: 10%;
  }
  .uk-push-3-10 {
    left: 30%;
  }
  .uk-push-7-10 {
    left: 70%;
  }
  .uk-push-9-10 {
    left: 90%;
  }
  /*
     * Pull
     */
  /* Halves */
  .uk-pull-1-2,
  .uk-pull-2-4,
  .uk-pull-3-6,
  .uk-pull-5-10 {
    left: -50%;
  }
  /* Thirds */
  .uk-pull-1-3,
  .uk-pull-2-6 {
    left: -33.333%;
  }
  .uk-pull-2-3,
  .uk-pull-4-6 {
    left: -66.666%;
  }
  /* Quarters */
  .uk-pull-1-4 {
    left: -25%;
  }
  .uk-pull-3-4 {
    left: -75%;
  }
  /* Fifths */
  .uk-pull-1-5,
  .uk-pull-2-10 {
    left: -20%;
  }
  .uk-pull-2-5,
  .uk-pull-4-10 {
    left: -40%;
  }
  .uk-pull-3-5,
  .uk-pull-6-10 {
    left: -60%;
  }
  .uk-pull-4-5,
  .uk-pull-8-10 {
    left: -80%;
  }
  /* Sixths */
  .uk-pull-1-6 {
    left: -16.666%;
  }
  .uk-pull-5-6 {
    left: -83.333%;
  }
  /* Tenths */
  .uk-pull-1-10 {
    left: -10%;
  }
  .uk-pull-3-10 {
    left: -30%;
  }
  .uk-pull-7-10 {
    left: -70%;
  }
  .uk-pull-9-10 {
    left: -90%;
  }
}
/* ========================================================================
   Component: Panel
 ========================================================================== */
/*
 * 1. Needed for `a` elements
 * 2. Create position context for badges
 */
.uk-panel {
  /* 1 */
  display: block;
  /* 2 */
  position: relative;
}
/*
 * Micro clearfix to make panels more robust
 */
.uk-panel:before,
.uk-panel:after {
  content: " ";
  display: table;
}
.uk-panel:after {
  clear: both;
}
/*
 * Remove margin from the last-child if not `uk-widget-title`
 */
.uk-panel > :not(.uk-panel-title):last-child {
  margin-bottom: 0;
}
/* Sub-object: `uk-panel-title`
 ========================================================================== */
.uk-panel-title {
  margin-top: 0;
  margin-bottom: 20px;
  font-size: 18px;
  line-height: 24px;
  font-weight: normal;
  text-transform: none;
  color: #444444;
}
/* Sub-object: `uk-panel-badge`
 ========================================================================== */
.uk-panel-badge {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
}
/* Modifier: `uk-panel-box`
 ========================================================================== */
.uk-panel-box {
  padding: 20px;
  background: #f5f5f5;
  color: #444444;
}
.uk-panel-box .uk-panel-title {
  color: #444444;
}
.uk-panel-box .uk-panel-badge {
  top: 10px;
  right: 10px;
}
.uk-panel-box .uk-panel-teaser {
  margin: -20px -20px 20px -20px;
}
/*
 * Nav in panel
 */
.uk-panel-box > .uk-nav-side {
  margin: 0 -20px;
}
/*
 * Sub-modifier: `uk-panel-box-primary`
 */
.uk-panel-box-primary {
  background-color: #eefaff;
  color: #699eb3;
}
.uk-panel-box-primary .uk-panel-title {
  color: #3484a4;
}
/*
 * Sub-modifier: `uk-panel-box-secondary`
 */
.uk-panel-box-secondary {
  background-color: #eeeeee;
  color: #444444;
}
.uk-panel-box-secondary .uk-panel-title {
  color: #444444;
}
/* Modifier: `uk-panel-header`
 ========================================================================== */
.uk-panel-header .uk-panel-title {
  padding-bottom: 10px;
  border-bottom: 1px solid #dddddd;
  color: #444444;
}
/* Modifier: `uk-panel-space`
 ========================================================================== */
.uk-panel-space {
  padding: 30px;
}
.uk-panel-space .uk-panel-badge {
  top: 30px;
  right: 30px;
}
/* Modifier: `uk-panel-divider`
 ========================================================================== */
.uk-panel + .uk-panel-divider {
  margin-top: 50px !important;
}
.uk-panel + .uk-panel-divider:before {
  content: "";
  display: block;
  position: absolute;
  top: -25px;
  left: 0;
  right: 0;
  border-top: 1px solid #dddddd;
}
/* Large screen and bigger */
@media (min-width: 1220px) {
  .uk-panel + .uk-panel-divider {
    margin-top: 70px !important;
  }
  .uk-panel + .uk-panel-divider:before {
    top: -35px;
  }
}
/* ========================================================================
   Component: Article
 ========================================================================== */
/*
 * Micro clearfix to make articles more robust
 */
.uk-article:before,
.uk-article:after {
  content: " ";
  display: table;
}
.uk-article:after {
  clear: both;
}
/*
 * Remove margin from the last-child
 */
.uk-article > :last-child {
  margin-bottom: 0;
}
/*
 * Vertical gutter for articles
 */
.uk-article + .uk-article {
  margin-top: 25px;
}
/* Sub-object `uk-article-title`
 ========================================================================== */
.uk-article-title {
  font-size: 36px;
  line-height: 42px;
  font-weight: 300;
  text-transform: none;
}
.uk-article-title a {
  color: inherit;
  text-decoration: none;
}
/* Sub-object `uk-article-meta`
 ========================================================================== */
.uk-article-meta {
  font-size: 12px;
  line-height: 18px;
  color: #999999;
}
/* Sub-object `uk-article-lead`
 ========================================================================== */
.uk-article-lead {
  color: #444444;
  font-size: 18px;
  line-height: 24px;
  font-weight: normal;
}
/* Sub-object `uk-article-divider`
 ========================================================================== */
.uk-article-divider {
  margin-bottom: 25px;
  border-color: #dddddd;
}
* + .uk-article-divider {
  margin-top: 25px;
}
/* ========================================================================
   Component: Comment
 ========================================================================== */
/* Sub-object `uk-comment-header`
 ========================================================================== */
.uk-comment-header {
  margin-bottom: 20px;
}
/*
 * Micro clearfix
 */
.uk-comment-header:before,
.uk-comment-header:after {
  content: " ";
  display: table;
}
.uk-comment-header:after {
  clear: both;
}
/* Sub-object `uk-comment-avatar`
 ========================================================================== */
.uk-comment-avatar {
  margin-right: 20px;
  float: left;
}
/* Sub-object `uk-comment-title`
 ========================================================================== */
.uk-comment-title {
  margin: 5px 0 0 0;
  font-size: 16px;
  line-height: 22px;
}
/* Sub-object `uk-comment-meta`
 ========================================================================== */
.uk-comment-meta {
  margin: 2px 0 0 0;
  font-size: 11px;
  line-height: 16px;
  color: #999999;
}
/* Sub-object `uk-comment-body`
 ========================================================================== */
/*
 * Remove margin from the last-child
 */
.uk-comment-body > :last-child {
  margin-bottom: 0;
}
/* Sub-object `uk-comment-list`
 ========================================================================== */
.uk-comment-list {
  padding: 0;
  list-style: none;
}
.uk-comment-list .uk-comment + ul {
  margin: 20px 0 0 0;
  list-style: none;
}
.uk-comment-list > li:nth-child(n+2),
.uk-comment-list .uk-comment + ul > li:nth-child(n+2) {
  margin-top: 20px;
}
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-comment-list .uk-comment + ul {
    padding-left: 100px;
  }
}
/* Modifier `uk-comment-primary`
 ========================================================================== */
/* ========================================================================
   Component: Nav
 ========================================================================== */
.uk-nav,
.uk-nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
/*
 * Items
 */
.uk-nav li > a {
  display: block;
  text-decoration: none;
}
.uk-nav > li > a {
  padding: 5px 20px;
}
/*
 * Nested items
 */
.uk-nav ul {
  padding-left: 15px;
}
.uk-nav ul a {
  padding: 2px 0;
}
/*
 * Item subtitle
 */
.uk-nav li > a > div {
  font-size: 12px;
  line-height: 18px;
}
/* Sub-object: `uk-nav-header`
 ========================================================================== */
.uk-nav-header {
  padding: 5px 20px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 12px;
}
.uk-nav-header:not(:first-child) {
  margin-top: 20px;
}
/* Sub-object: `uk-nav-divider`
 ========================================================================== */
.uk-nav-divider {
  margin: 9px 20px;
}
/* Sub-object: `uk-nav-sub`
 ========================================================================== */
/*
 * `ul` needed for higher specificity to override padding
 */
ul.uk-nav-sub {
  padding: 5px 0 5px 20px;
}
/* Modifier: `uk-nav-parent-icon`
 ========================================================================== */
.uk-nav-parent-icon > .uk-parent > a:after {
  content: "\f104";
  width: 20px;
  margin-right: -10px;
  float: right;
  font-family: FontAwesome;
  text-align: center;
}
.uk-nav-parent-icon > .uk-parent.uk-open > a:after {
  content: "\f107";
}
/* Modifier `uk-nav-side`
 ========================================================================== */
/*
 * Items
 */
.uk-nav-side > li > a {
  color: #444444;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-nav-side > li > a:hover,
.uk-nav-side > li > a:focus {
  background: rgba(0, 0, 0, 0.05);
  color: #444444;
  /* 2 */
  outline: none;
}
/* Active */
.uk-nav-side > li.uk-active > a {
  background: #00a8e6;
  color: #ffffff;
}
/*
 * Sub-object: `uk-nav-header`
 */
.uk-nav-side .uk-nav-header {
  color: #444444;
}
/*
 * Sub-object: `uk-nav-divider`
 */
.uk-nav-side .uk-nav-divider {
  border-top: 1px solid #dddddd;
}
/*
 * Nested items
 */
.uk-nav-side ul a {
  color: #1fa2d6;
}
.uk-nav-side ul a:hover {
  color: #0074a2;
}
/* Modifier `uk-nav-dropdown`
 ========================================================================== */
/*
 * Items
 */
.uk-nav-dropdown > li > a {
  color: #444444;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-nav-dropdown > li > a:hover,
.uk-nav-dropdown > li > a:focus {
  background: #00a8e6;
  color: #ffffff;
  /* 2 */
  outline: none;
}
/*
 * Sub-object: `uk-nav-header`
 */
.uk-nav-dropdown .uk-nav-header {
  color: #999999;
}
/*
 * Sub-object: `uk-nav-divider`
 */
.uk-nav-dropdown .uk-nav-divider {
  border-top: 1px solid #dddddd;
}
/*
 * Nested items
 */
.uk-nav-dropdown ul a {
  color: #1fa2d6;
}
.uk-nav-dropdown ul a:hover {
  color: #0074a2;
}
/* Modifier `uk-nav-navbar`
 ========================================================================== */
/*
 * Items
 */
.uk-nav-navbar > li > a {
  color: #444444;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-nav-navbar > li > a:hover,
.uk-nav-navbar > li > a:focus {
  background: #00a8e6;
  color: #ffffff;
  /* 2 */
  outline: none;
}
/*
 * Sub-object: `uk-nav-header`
 */
.uk-nav-navbar .uk-nav-header {
  color: #999999;
}
/*
 * Sub-object: `uk-nav-divider`
 */
.uk-nav-navbar .uk-nav-divider {
  border-top: 1px solid #dddddd;
}
/*
 * Nested items
 */
.uk-nav-navbar ul a {
  color: #1fa2d6;
}
.uk-nav-navbar ul a:hover {
  color: #0074a2;
}
/* Modifier `uk-nav-offcanvas`
 ========================================================================== */
/*
 * Items
 */
.uk-nav-offcanvas > li > a {
  color: #cccccc;
  padding: 10px 15px;
}
/*
 * Hover
 * No hover on touch devices because it behaves buggy in fixed offcanvas
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-nav-offcanvas > .uk-open > a,
html:not(.uk-touch) .uk-nav-offcanvas > li > a:hover,
html:not(.uk-touch) .uk-nav-offcanvas > li > a:focus {
  background: #404040;
  color: #ffffff;
  /* 2 */
  outline: none;
}
/*
 * Active
 * `html .uk-nav` needed for higher specificity to override hover
 */
html .uk-nav.uk-nav-offcanvas > li.uk-active > a {
  background: #1a1a1a;
  color: #ffffff;
}
/*
 * Sub-object: `uk-nav-header`
 */
.uk-nav-offcanvas .uk-nav-header {
  color: #777777;
}
/*
 * Sub-object: `uk-nav-divider`
 */
.uk-nav-offcanvas .uk-nav-divider {
  border-top: 1px solid #1a1a1a;
}
/*
 * Nested items
 * No hover on touch devices because it behaves buggy in fixed offcanvas
 */
.uk-nav-offcanvas ul a {
  color: #cccccc;
}
html:not(.uk-touch) .uk-nav-offcanvas ul a:hover {
  color: #ffffff;
}
/* ========================================================================
   Component: Navbar
 ========================================================================== */
.uk-navbar {
  background: #eeeeee;
  color: #444444;
}
/*
 * Micro clearfix
 */
.uk-navbar:before,
.uk-navbar:after {
  content: " ";
  display: table;
}
.uk-navbar:after {
  clear: both;
}
/* Sub-object: `uk-navbar-nav`
 ========================================================================== */
.uk-navbar-nav {
  margin: 0;
  padding: 0;
  list-style: none;
  float: left;
}
/*
 * 1. Create position context for dropdowns
 */
.uk-navbar-nav > li {
  float: left;
  /* 1 */
  position: relative;
}
/*
 * 1. Dimensions
 * 2. Style
 */
.uk-navbar-nav > li > a {
  display: block;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  /* 1 */
  height: 45px;
  padding: 0 15px;
  line-height: 45px;
  /* 2 */
  color: #444444;
  font-size: 14px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: normal;
}
/* Appear not as link */
.uk-navbar-nav > li > a[href='#'] {
  cursor: text;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Also apply if dropdown is opened
 * 3. Remove default focus style
 */
.uk-navbar-nav > li:hover > a,
.uk-navbar-nav > li > a:focus,
.uk-navbar-nav > li.uk-open > a {
  background-color: #f5f5f5;
  color: #444444;
  /* 3 */
  outline: none;
}
/* OnClick */
.uk-navbar-nav > li > a:active {
  background-color: #dddddd;
  color: #444444;
}
/* Active */
.uk-navbar-nav > li.uk-active > a {
  background-color: #f5f5f5;
  color: #444444;
}
/* Sub-objects: `uk-navbar-nav-subtitle`
 ========================================================================== */
.uk-navbar-nav .uk-navbar-nav-subtitle {
  line-height: 33px;
}
.uk-navbar-nav-subtitle > div {
  margin-top: -8.5px;
  font-size: 10px;
  line-height: 12px;
}
/* Sub-objects: `uk-navbar-content`, `uk-navbar-brand`, `uk-navbar-toggle`
 ========================================================================== */
/*
 * Imitate navbar items
 */
.uk-navbar-content,
.uk-navbar-brand,
.uk-navbar-toggle {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block;
  height: 45px;
  padding: 0 15px;
  float: left;
}
/*
 * Helper to center all child elements vertically
 */
.uk-navbar-content:before,
.uk-navbar-brand:before,
.uk-navbar-toggle:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
/* Sub-objects: `uk-navbar-content`
 ========================================================================== */
/*
 * Better sibling spacing
 */
.uk-navbar-content + .uk-navbar-content:not(.uk-navbar-center) {
  padding-left: 0;
}
/*
 * Link colors
 */
.uk-navbar-content > a:not([class]) {
  color: #1fa2d6;
}
.uk-navbar-content > a:not([class]):hover {
  color: #0074a2;
}
/* Sub-objects: `uk-navbar-brand`
 ========================================================================== */
.uk-navbar-brand {
  font-size: 18px;
  color: #444444;
  text-decoration: none;
}
/*
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-navbar-brand:hover,
.uk-navbar-brand:focus {
  color: #444444;
  text-decoration: none;
  /* 2 */
  outline: none;
}
/* Sub-object: `uk-navbar-toggle`
 ========================================================================== */
.uk-navbar-toggle {
  font-size: 18px;
  color: #444444;
  text-decoration: none;
}
/*
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-navbar-toggle:hover,
.uk-navbar-toggle:focus {
  color: #444444;
  text-decoration: none;
  /* 2 */
  outline: none;
}
/*
 * 1. Center icon vertically
 */
.uk-navbar-toggle:after {
  content: "\f0c9";
  font-family: FontAwesome;
  /* 1 */
  vertical-align: middle;
}
.uk-navbar-toggle-alt:after {
  content: "\f002";
}
/* Sub-object: `uk-navbar-center`
 ========================================================================== */
/*
 * The element with this class needs to be last child in the navbar
 * 1. This hack is needed because other float elements shift centered text
 */
.uk-navbar-center {
  float: none;
  text-align: center;
  /* 1 */
  max-width: 50%;
  margin-left: auto;
  margin-right: auto;
}
/* Sub-object: `uk-navbar-flip`
 ========================================================================== */
.uk-navbar-flip {
  float: right;
}
/* ========================================================================
   Component: Subnav
 ========================================================================== */
/*
 * 1. Remove default list style
 * 2. Remove whitespace between child elements when using `inline-block`
 */
.uk-subnav {
  /* 1 */
  padding: 0;
  list-style: none;
  /* 2 */
  font-size: 0.001px;
}
/* Items
 ========================================================================== */
/*
 * 1. Create position context for dropdowns
 * 2. Reset whitespace hack
 */
.uk-subnav > li {
  /* 1 */
  position: relative;
  /* 2 */
  font-size: 1rem;
  vertical-align: top;
}
.uk-subnav > li,
.uk-subnav > li > a,
.uk-subnav > li > span {
  display: inline-block;
}
.uk-subnav > li:nth-child(n+2) {
  margin-left: 10px;
}
/*
 * Items
 */
.uk-subnav > li > a {
  color: #1fa2d6;
}
.uk-subnav > li > a:hover {
  color: #0074a2;
}
/*
 * Active
 */
/*
 * Disabled
 */
.uk-subnav > li > span {
  color: #999999;
}
/* Modifier: 'subnav-line'
 ========================================================================== */
.uk-subnav-line > li:nth-child(n+2):before {
  content: "";
  display: inline-block;
  height: 10px;
  margin-right: 10px;
  border-left: 1px solid #dddddd;
}
/* Modifier: 'subnav-pill'
 ========================================================================== */
.uk-subnav-pill > li > a,
.uk-subnav-pill > li > span {
  padding: 3px 9px;
  text-decoration: none;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-subnav-pill > li > a:hover,
.uk-subnav-pill > li > a:focus {
  background: #eeeeee;
  color: #444444;
  /* 2 */
  outline: none;
}
/*
 * Active
 * `li` needed for higher specificity to override hover
 */
.uk-subnav-pill > li.uk-active > a {
  background: #00a8e6;
  color: #ffffff;
}
/* ========================================================================
   Component: Breadcrumb
 ========================================================================== */
/*
 * 1. Remove default list style
 * 2. Remove whitespace between child elements when using `inline-block`
 */
.uk-breadcrumb {
  /* 1 */
  padding: 0;
  list-style: none;
  /* 2 */
  font-size: 0.001px;
}
/* Items
 ========================================================================== */
/*
 * Reset whitespace hack
 */
.uk-breadcrumb > li {
  font-size: 1rem;
  vertical-align: top;
}
.uk-breadcrumb > li,
.uk-breadcrumb > li > a,
.uk-breadcrumb > li > span {
  display: inline-block;
}
.uk-breadcrumb > li:nth-child(n+2):before {
  content: "/";
  display: inline-block;
  margin: 0 8px;
}
/*
 * Disabled
 */
.uk-breadcrumb > li:not(.uk-active) > span {
  color: #999999;
}
/* ========================================================================
   Component: Pagination
 ========================================================================== */
/*
 * 1. Remove default list style
 * 2. Center pagination by default
 * 3. Remove whitespace between child elements when using `inline-block`
 */
.uk-pagination {
  /* 1 */
  padding: 0;
  list-style: none;
  /* 2 */
  text-align: center;
  /* 3 */
  font-size: 0.001px;
}
/*
 * Micro clearfix
 * Needed if `uk-pagination-previous` or `uk-pagination-next` sub-objects are used
 */
.uk-pagination:before,
.uk-pagination:after {
  content: " ";
  display: table;
}
.uk-pagination:after {
  clear: both;
}
/* Items
 ========================================================================== */
/*
 * 1. Reset whitespace hack
 * 2. Remove the gap at the bottom of it container
 */
.uk-pagination > li {
  display: inline-block;
  /* 1 */
  font-size: 1rem;
  /* 2 */
  vertical-align: top;
}
.uk-pagination > li:nth-child(n+2) {
  margin-left: 5px;
}
/*
 * 1. Makes pagination more robust against different box-sizing use
 * 2. Reset text-align to center if alignment modifier is used
 */
.uk-pagination > li > a,
.uk-pagination > li > span {
  display: inline-block;
  min-width: 16px;
  padding: 3px 5px;
  line-height: 20px;
  text-decoration: none;
  /* 1 */
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  /* 2 */
  text-align: center;
}
/*
 * Links
 */
.uk-pagination > li > a {
  background: #eeeeee;
  color: #444444;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-pagination > li > a:hover,
.uk-pagination > li > a:focus {
  background-color: #f5f5f5;
  color: #444444;
  /* 2 */
  outline: none;
}
/* OnClick */
.uk-pagination > li > a:active {
  background-color: #dddddd;
  color: #444444;
}
/*
 * Active
 */
.uk-pagination > .uk-active > span {
  background: #00a8e6;
  color: #ffffff;
}
/*
 * Disabled
 */
.uk-pagination > .uk-disabled > span {
  background-color: #f5f5f5;
  color: #999999;
}
/* Previous and next navigation
 ========================================================================== */
.uk-pagination-previous {
  float: left;
}
.uk-pagination-next {
  float: right;
}
/* Alignment modifiers
 ========================================================================== */
.uk-pagination-left {
  text-align: left;
}
.uk-pagination-right {
  text-align: right;
}
/* ========================================================================
   Component: Tab
 ========================================================================== */
.uk-tab {
  margin: 0;
  padding: 0;
  list-style: none;
  border-bottom: 1px solid #dddddd;
}
/*
 * Micro clearfix on the deepest container
 */
.uk-tab:before,
.uk-tab:after {
  content: " ";
  display: table;
}
.uk-tab:after {
  clear: both;
}
/*
 * Items
 * 1. Create position context for dropdowns
 */
.uk-tab > li {
  margin-bottom: -1px;
  float: left;
  /* 1 */
  position: relative;
}
.uk-tab > li > a {
  display: block;
  padding: 8px 12px 8px 12px;
  border: 1px solid transparent;
  border-bottom-width: 0;
  color: #1fa2d6;
  text-decoration: none;
}
.uk-tab > li:nth-child(n+2) > a {
  margin-left: 5px;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Also apply if dropdown is opened
 * 3. Remove default focus style
 */
.uk-tab > li > a:hover,
.uk-tab > li > a:focus,
.uk-tab > li.uk-open > a {
  border-color: #f5f5f5;
  background: #f5f5f5;
  color: #0074a2;
  /* 2 */
  outline: none;
}
.uk-tab > li:not(.uk-active) > a:hover,
.uk-tab > li:not(.uk-active) > a:focus,
.uk-tab > li.uk-open:not(.uk-active) > a {
  margin-bottom: 1px;
  padding-bottom: 7px;
}
/* Active */
.uk-tab > li.uk-active > a {
  border-color: #dddddd;
  border-bottom-color: transparent;
  background: #ffffff;
  color: #444444;
}
/* Disabled */
.uk-tab > li.uk-disabled > a {
  color: #999999;
  cursor: auto;
}
.uk-tab > li.uk-disabled > a:hover,
.uk-tab > li.uk-disabled > a:focus,
.uk-tab > li.uk-disabled.uk-active > a {
  background: none;
  border-color: transparent;
}
/* Modifier: 'tab-flip'
 ========================================================================== */
.uk-tab-flip > li {
  float: right;
}
.uk-tab-flip > li:nth-child(n+2) > a {
  margin-left: 0;
  margin-right: 5px;
}
/* Modifier: 'tab-responsive'
 ========================================================================== */
/*
 * Hidden by default
 */
.uk-tab-responsive {
  display: none;
}
.uk-tab-responsive > a:before {
  content: "\f0c9\00a0";
  font-family: FontAwesome;
}
/* Phone landscape and smaller */
@media (max-width: 767px) {
  [data-uk-tab] > li {
    display: none;
  }
  [data-uk-tab] > li.uk-tab-responsive {
    display: block;
  }
  [data-uk-tab] > li.uk-tab-responsive > a {
    margin-left: 0;
    margin-right: 0;
  }
}
/* Modifier: 'tab-center'
 ========================================================================== */
.uk-tab-center {
  border-bottom: 1px solid #dddddd;
}
.uk-tab-center-bottom {
  border-bottom: none;
  border-top: 1px solid #dddddd;
}
.uk-tab-center:before,
.uk-tab-center:after {
  content: " ";
  display: table;
}
.uk-tab-center:after {
  clear: both;
}
/*
 * 1. Using `right` to prevent vertical scrollbar caused by centering if to many tabs
 */
.uk-tab-center .uk-tab {
  position: relative;
  right: 50%;
  border: none;
  float: right;
}
.uk-tab-center .uk-tab > li {
  position: relative;
  right: -50%;
}
.uk-tab-center .uk-tab > li > a {
  text-align: center;
}
/* Modifier: 'tab-bottom'
 ========================================================================== */
.uk-tab-bottom {
  border-top: 1px solid #dddddd;
  border-bottom: none;
}
.uk-tab-bottom > li {
  margin-top: -1px;
  margin-bottom: 0;
}
.uk-tab-bottom > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  border-bottom-width: 1px;
  border-top-width: 0;
}
.uk-tab-bottom > li:not(.uk-active) > a:hover,
.uk-tab-bottom > li:not(.uk-active) > a:focus,
.uk-tab-bottom > li.uk-open:not(.uk-active) > a {
  margin-bottom: 0;
  margin-top: 1px;
  padding-bottom: 8px;
  padding-top: 7px;
}
.uk-tab-bottom > li.uk-active > a {
  border-top-color: transparent;
  border-bottom-color: #dddddd;
}
/* Modifier: 'tab-grid'
 ========================================================================== */
/*
 * 1. Create position context to prevent hidden border because of negative `z-index`
 */
.uk-tab-grid {
  margin-left: -5px;
  border-bottom: none;
  /* 1 */
  position: relative;
  z-index: 0;
}
.uk-tab-grid:before {
  display: block;
  position: absolute;
  left: 5px;
  right: 0;
  bottom: -1px;
  border-top: 1px solid #dddddd;
  /* 1 */
  z-index: -1;
}
.uk-tab-grid > li:first-child > a {
  margin-left: 5px;
}
.uk-tab-grid > li > a {
  text-align: center;
}
/*
 * If `uk-tab-bottom`
 */
.uk-tab-grid.uk-tab-bottom {
  border-top: none;
}
.uk-tab-grid.uk-tab-bottom:before {
  top: -1px;
  bottom: auto;
}
/* Modifier: 'tab-left', 'tab-right'
 ========================================================================== */
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-tab-left,
  .uk-tab-right {
    border-bottom: none;
  }
  .uk-tab-left > li,
  .uk-tab-right > li {
    margin-bottom: 0;
    float: none;
  }
  .uk-tab-left > li > a,
  .uk-tab-right > li > a {
    padding-top: 8px;
    padding-bottom: 8px;
  }
  .uk-tab-left > li:nth-child(n+2) > a,
  .uk-tab-right > li:nth-child(n+2) > a {
    margin-left: 0;
    margin-top: 5px;
  }
  .uk-tab-left > li.uk-active > a,
  .uk-tab-right > li.uk-active > a {
    border-color: #dddddd;
  }
  /*
     * Modifier: 'tab-left'
     */
  .uk-tab-left {
    border-right: 1px solid #dddddd;
  }
  .uk-tab-left > li {
    margin-right: -1px;
  }
  .uk-tab-left > li > a {
    border-bottom-width: 1px;
    border-right-width: 0;
  }
  .uk-tab-left > li:not(.uk-active) > a:hover,
  .uk-tab-left > li:not(.uk-active) > a:focus {
    margin-bottom: 0;
    margin-right: 1px;
    padding-bottom: 8px;
    padding-right: 11px;
  }
  .uk-tab-left > li.uk-active > a {
    border-right-color: transparent;
  }
  /*
     * Modifier: 'tab-right'
     */
  .uk-tab-right {
    border-left: 1px solid #dddddd;
  }
  .uk-tab-right > li {
    margin-left: -1px;
  }
  .uk-tab-right > li > a {
    border-bottom-width: 1px;
    border-left-width: 0;
  }
  .uk-tab-right > li:not(.uk-active) > a:hover,
  .uk-tab-right > li:not(.uk-active) > a:focus {
    margin-bottom: 0;
    margin-left: 1px;
    padding-bottom: 8px;
    padding-left: 11px;
  }
  .uk-tab-right > li.uk-active > a {
    border-left-color: transparent;
  }
}
/* ========================================================================
   Component: List
 ========================================================================== */
.uk-list {
  padding: 0;
  list-style: none;
}
/*
 * Micro clearfix to make list more robust
 */
.uk-list > li:before,
.uk-list > li:after {
  content: " ";
  display: table;
}
.uk-list > li:after {
  clear: both;
}
/*
 * Remove margin from the last-child
 */
.uk-list > li > :last-child {
  margin-bottom: 0;
}
/*
 * Nested lists
 */
.uk-list ul {
  margin: 0;
  padding-left: 20px;
  list-style: none;
}
/* Modifier: `uk-list-line`
 ========================================================================== */
.uk-list-line > li:nth-child(n+2) {
  margin-top: 5px;
  padding-top: 5px;
  border-top: 1px solid #dddddd;
}
/* Modifier: `uk-list-striped`
 ========================================================================== */
.uk-list-striped > li {
  padding: 5px 5px;
}
.uk-list-striped > li:nth-of-type(odd) {
  background: #f5f5f5;
}
/* Modifier: `uk-list-space`
 ========================================================================== */
.uk-list-space > li:nth-child(n+2) {
  margin-top: 10px;
}
/* ========================================================================
   Component: Description list
 ========================================================================== */
/* Modifier: `uk-description-list-horizontal`
 ========================================================================== */
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-description-list-horizontal {
    overflow: hidden;
  }
  .uk-description-list-horizontal > dt {
    width: 160px;
    float: left;
    clear: both;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .uk-description-list-horizontal > dd {
    margin-left: 180px;
  }
}
/* Modifier: `uk-description-list-line`
 ========================================================================== */
.uk-description-list-line > dt {
  font-weight: normal;
}
.uk-description-list-line > dt:nth-child(n+2) {
  margin-top: 5px;
  padding-top: 5px;
  border-top: 1px solid #dddddd;
}
.uk-description-list-line > dd {
  color: #999999;
}
/* ========================================================================
   Component: Table
 ========================================================================== */
/*
 * Block element behavior
 */
.uk-table {
  width: 100%;
  margin-bottom: 20px;
}
/*
 * Add margin if adjacent element
 */
* + .uk-table {
  margin-top: 20px;
}
.uk-table th,
.uk-table td {
  padding: 8px 8px;
}
/*
 * Set alignment
 */
.uk-table th {
  text-align: left;
}
.uk-table td {
  vertical-align: top;
}
.uk-table thead th {
  vertical-align: bottom;
}
/*
 * Caption and footer
 */
.uk-table caption,
.uk-table tfoot {
  font-size: 12px;
  font-style: italic;
}
.uk-table caption {
  text-align: left;
  color: #999999;
}
/* Sub-modifier: `uk-table-middle`
 ========================================================================== */
.uk-table-middle,
.uk-table-middle td {
  vertical-align: middle !important;
}
/* Modifier: `uk-table-striped`
 ========================================================================== */
.uk-table-striped tbody tr:nth-of-type(odd) {
  background: #f5f5f5;
}
/* Modifier: `uk-table-condensed`
 ========================================================================== */
.uk-table-condensed td {
  padding: 4px 8px;
}
/* Modifier: `uk-table-hover`
 ========================================================================== */
.uk-table-hover tbody tr:hover {
  background: #eeeeee;
}
/* ========================================================================
   Component: Form
 ========================================================================== */
/*
 * Remove margin from the last-child
 */
.uk-form > :last-child {
  margin-bottom: 0;
}
/*
 * Controls
 * Except for `range`, `radio`, `checkbox`, `file`, `submit`, `reset`, `button` and `image`
 * 1. Must be `height` because `min-height` is not working in OSX
 * 2. Responsiveness: Sets a maximum width relative to the parent to scale on narrower viewports
 * 3. Vertical `padding` needed for `select` elements in Firefox
 * 4. Style
 */
.uk-form select,
.uk-form textarea,
.uk-form input:not([type]),
.uk-form input[type="text"],
.uk-form input[type="password"],
.uk-form input[type="datetime"],
.uk-form input[type="datetime-local"],
.uk-form input[type="date"],
.uk-form input[type="month"],
.uk-form input[type="time"],
.uk-form input[type="week"],
.uk-form input[type="number"],
.uk-form input[type="email"],
.uk-form input[type="url"],
.uk-form input[type="search"],
.uk-form input[type="tel"],
.uk-form input[type="color"] {
  /* 1 */
  height: 30px;
  /* 2 */
  max-width: 100%;
  /* 3 */
  padding: 4px 6px;
  /* 4 */
  border: 1px solid #dddddd;
  background: #ffffff;
  color: #444444;
  -webkit-transition: all linear 0.2s;
  transition: all linear 0.2s;
  /* Focus state */
  /* Disabled state */
}
.uk-form select:focus,
.uk-form textarea:focus,
.uk-form input:not([type]):focus,
.uk-form input[type="text"]:focus,
.uk-form input[type="password"]:focus,
.uk-form input[type="datetime"]:focus,
.uk-form input[type="datetime-local"]:focus,
.uk-form input[type="date"]:focus,
.uk-form input[type="month"]:focus,
.uk-form input[type="time"]:focus,
.uk-form input[type="week"]:focus,
.uk-form input[type="number"]:focus,
.uk-form input[type="email"]:focus,
.uk-form input[type="url"]:focus,
.uk-form input[type="search"]:focus,
.uk-form input[type="tel"]:focus,
.uk-form input[type="color"]:focus {
  border-color: #99baca;
  outline: 0;
  background: #f5fbfe;
  color: #444444;
}
.uk-form select:disabled,
.uk-form textarea:disabled,
.uk-form input:not([type]):disabled,
.uk-form input[type="text"]:disabled,
.uk-form input[type="password"]:disabled,
.uk-form input[type="datetime"]:disabled,
.uk-form input[type="datetime-local"]:disabled,
.uk-form input[type="date"]:disabled,
.uk-form input[type="month"]:disabled,
.uk-form input[type="time"]:disabled,
.uk-form input[type="week"]:disabled,
.uk-form input[type="number"]:disabled,
.uk-form input[type="email"]:disabled,
.uk-form input[type="url"]:disabled,
.uk-form input[type="search"]:disabled,
.uk-form input[type="tel"]:disabled,
.uk-form input[type="color"]:disabled {
  border-color: #dddddd;
  background-color: #f5f5f5;
  color: #999999;
}
/*
 * Placeholder
 * Higher specificity (!important) needed to override color in IE
 */
.uk-form :-ms-input-placeholder {
  color: #999999 !important;
}
.uk-form ::-moz-placeholder {
  color: #999999;
}
.uk-form ::-webkit-input-placeholder {
  color: #999999;
}
.uk-form :disabled:-ms-input-placeholder {
  color: #999999 !important;
}
.uk-form :disabled::-moz-placeholder {
  color: #999999;
}
.uk-form :disabled::-webkit-input-placeholder {
  color: #999999;
}
/*
 * Reset style on iOS.
 */
.uk-form textarea,
.uk-form input:not([type]),
.uk-form input[type="text"],
.uk-form input[type="password"],
.uk-form input[type="email"],
.uk-form input[type="url"],
.uk-form input[type="search"],
.uk-form input[type="tel"] {
  -webkit-appearance: none;
}
/*
 * Removes box-shadow for invalid controls in Firefox.
 */
.uk-form :invalid {
  box-shadow: none;
}
/*
 * Legend style
 * 1. `margin-bottom` is not working in Safari and Opera.
 *    Using `padding` and :after instead to create the border
 * 2. Style
 */
.uk-form legend {
  width: 100%;
  /* 1 */
  padding-bottom: 20px;
  /* 2 */
  font-size: 18px;
  line-height: 30px;
}
/* 1 */
.uk-form legend:after {
  content: "";
  display: block;
  border-bottom: 1px solid #dddddd;
}
/* Size modifiers
 * Higher specificity needed to override defaults
 ========================================================================== */
select.uk-form-small,
textarea.uk-form-small,
input[type].uk-form-small,
input:not([type]).uk-form-small {
  height: 25px;
  padding: 3px 3px;
  font-size: 12px;
}
select.uk-form-large,
textarea.uk-form-large,
input[type].uk-form-large,
input:not([type]).uk-form-large {
  height: 40px;
  padding: 8px 6px;
  font-size: 16px;
}
/* Reset height
 * Must be after size modifiers
 ========================================================================== */
.uk-form textarea,
.uk-form select[multiple],
.uk-form select[size] {
  height: auto;
}
/* Validation states
 * Using !important to keep the selector simple
 ========================================================================== */
/*
 * Error state
 */
.uk-form-danger {
  border-color: #dc8d99 !important;
  background: #fff7f8 !important;
  color: #c91032 !important;
}
/*
 * Success state
 */
.uk-form-success {
  border-color: #8ec73b !important;
  background: #fafff2 !important;
  color: #539022 !important;
}
/* Style modifiers
 * Using !important to keep the selector simple
 ========================================================================== */
/*
 * Blank form
 */
.uk-form-blank {
  border-color: transparent !important;
  border-style: dashed !important;
  background: none !important;
}
.uk-form-blank:focus {
  border-color: #dddddd !important;
}
/* Size sub-modifiers
 ========================================================================== */
/*
 * Fixed widths
 * Different widths for mini sized `input` and `select` elements
 */
input.uk-form-width-mini {
  width: 40px;
}
select.uk-form-width-mini {
  width: 65px;
}
.uk-form-width-small {
  width: 130px;
}
.uk-form-width-medium {
  width: 200px;
}
.uk-form-width-large {
  width: 500px;
}
/* Sub-objects: `uk-form-row`
 * Groups labels and controls in rows
 ========================================================================== */
/*
 * Micro clearfix
 * Needed for `uk-form-horizontal` modifier
 */
.uk-form-row:before,
.uk-form-row:after {
  content: " ";
  display: table;
}
.uk-form-row:after {
  clear: both;
}
/*
 * Vertical gutter
 */
.uk-form-row + .uk-form-row {
  margin-top: 20px;
}
/* Help text
 * Sub-object: `uk-form-help-inline`, `uk-form-help-block`
 ========================================================================== */
.uk-form-help-inline {
  display: inline-block;
  margin: 0 0 0 10px;
}
.uk-form-help-block {
  margin: 5px 0 0 0;
}
/* Controls content
 * Sub-object: `uk-form-controls`, `uk-form-controls-condensed`
 ========================================================================== */
/*
 * Remove margins
 */
.uk-form-controls > :first-child {
  margin-top: 0;
}
.uk-form-controls > :last-child {
  margin-bottom: 0;
}
/*
 * Group controls and text into blocks with a small spacing between blocks
 */
.uk-form-controls-condensed {
  margin: 5px 0;
}
/* Modifier: `uk-form-stacked`
 * Requires sub-object: `uk-form-label`
 ========================================================================== */
.uk-form-stacked .uk-form-label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}
/* Modifier: `uk-form-horizontal`
 * Requires sub-objects: `uk-form-label`, `uk-form-controls`
 ========================================================================== */
/* Tablet portrait and smaller */
@media (max-width: 959px) {
  /* Behave like `uk-form-stacked` */
  .uk-form-horizontal .uk-form-label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
}
/* Desktop and bigger */
@media (min-width: 960px) {
  .uk-form-horizontal .uk-form-label {
    width: 200px;
    margin-top: 5px;
    float: left;
  }
  .uk-form-horizontal .uk-form-controls {
    margin-left: 215px;
  }
  /* Better vertical alignment if controls are checkboxes and radio buttons with text */
  .uk-form-horizontal .uk-form-controls-text {
    padding-top: 5px;
  }
}
/* Sub-object: `uk-form-icon`
 ========================================================================== */
.uk-form-icon {
  position: relative;
  display: inline-block;
  max-width: 100%;
}
/*
 * 1. Make form element clickable through icon
 */
.uk-form-icon > [class*='uk-icon-'] {
  position: absolute;
  top: 50%;
  width: 30px;
  margin-top: -7px;
  font-size: 14px;
  color: #999999;
  text-align: center;
  /* 1 */
  pointer-events: none;
}
.uk-form-icon:not(.uk-form-icon-flip) > input {
  padding-left: 30px !important;
}
/*
 * Sub-modifier: `uk-form-icon-flip`
 */
.uk-form-icon-flip > [class*='uk-icon-'] {
  right: 0;
}
.uk-form-icon-flip > input {
  padding-right: 30px !important;
}
/* ========================================================================
   Component: Button
 ========================================================================== */
/*
 * 1. Required for `a` elements
 * 2. Required for `button` and `input` elements
 * 3. `line-height` is used to create a height
 * 4. `min-height` is necessary for `input` elements in Firefox and Opera because `line-height` is not working.
 * 5. Reset button group whitespace hack
 * 6. Style
 */
.uk-button {
  /* 1 */
  display: inline-block;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  vertical-align: middle;
  text-decoration: none;
  text-align: center;
  /* 2 */
  border: none;
  /* 3 */
  line-height: 30px;
  /* 4 */
  min-height: 30px;
  /* 5 */
  font-size: 1rem;
  /* 6 */
  padding: 0 12px;
  background: #eeeeee;
  color: #444444;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 * 3. Required for `a` elements
 */
.uk-button:hover,
.uk-button:focus {
  background-color: #f5f5f5;
  color: #444444;
  /* 2 */
  outline: none;
  /* 3 */
  text-decoration: none;
}
/* Active */
.uk-button:active,
.uk-button.uk-active {
  background-color: #dddddd;
  color: #444444;
}
/* Color modifiers
 ========================================================================== */
/*
 * Modifier: `uk-button-primary`
 */
.uk-button-primary {
  background-color: #00a8e6;
  color: #ffffff;
}
/* Hover */
.uk-button-primary:hover,
.uk-button-primary:focus {
  background-color: #53b5de;
  color: #ffffff;
}
/* Active */
.uk-button-primary:active,
.uk-button-primary.uk-active {
  background-color: #359ac4;
  color: #ffffff;
}
/*
 * Modifier: `uk-button-success`
 */
.uk-button-success {
  background-color: #8cc14c;
  color: #ffffff;
}
/* Hover */
.uk-button-success:hover,
.uk-button-success:focus {
  background-color: #8ec73b;
  color: #ffffff;
}
/* Active */
.uk-button-success:active,
.uk-button-success.uk-active {
  background-color: #72ae41;
  color: #ffffff;
}
/*
 * Modifier: `uk-button-danger`
 */
.uk-button-danger {
  background-color: #da314b;
  color: #ffffff;
}
/* Hover */
.uk-button-danger:hover,
.uk-button-danger:focus {
  background-color: #e4354f;
  color: #ffffff;
}
/* Active */
.uk-button-danger:active,
.uk-button-danger.uk-active {
  background-color: #c91032;
  color: #ffffff;
}
/* Disabled state
 * Overrides also the color modifiers
 ========================================================================== */
/* Equal for all button types */
.uk-button:disabled {
  background-color: #f5f5f5;
  color: #999999;
}
/* Modifier: `uk-button-link`
 ========================================================================== */
/* Reset */
.uk-button-link,
.uk-button-link:hover,
.uk-button-link:focus,
.uk-button-link:active,
.uk-button-link.uk-active,
.uk-button-link:disabled {
  border-color: transparent;
  background: none;
}
/* Color */
.uk-button-link {
  color: #1fa2d6;
}
.uk-button-link:hover,
.uk-button-link:focus,
.uk-button-link:active,
.uk-button-link.uk-active {
  color: #0074a2;
  text-decoration: underline;
}
.uk-button-link:disabled {
  color: #999999;
}
/* Focus */
.uk-button-link:focus {
  outline: 1px dotted;
}
/* Size modifiers
 ========================================================================== */
.uk-button-mini {
  min-height: 20px;
  padding: 0 6px;
  line-height: 20px;
  font-size: 11px;
}
.uk-button-small {
  min-height: 25px;
  padding: 0 10px;
  line-height: 25px;
  font-size: 12px;
}
.uk-button-large {
  min-height: 40px;
  padding: 0 15px;
  line-height: 40px;
  font-size: 16px;
}
/* Sub-object `uk-button-group`
 ========================================================================== */
/*
 * 1. Behave like buttons
 * 2. Create position context for dropdowns
 * 3. Remove whitespace between child elements when using `inline-block`
 * 4. Prevent buttons from wrapping
 * 5. Remove whitespace between child elements when using `inline-block`
 */
.uk-button-group {
  /* 1 */
  display: inline-block;
  vertical-align: middle;
  /* 2 */
  position: relative;
  /* 3 */
  font-size: 0.001px;
  /* 4 */
  white-space: nowrap;
}
.uk-button-group > * {
  display: inline-block;
}
/* 5 */
.uk-button-group .uk-button {
  vertical-align: top;
}
/* Sub-object: `uk-button-dropdown`
 ========================================================================== */
/*
 * 1. Behave like buttons
 * 2. Create position context for dropdowns
 */
.uk-button-dropdown {
  /* 1 */
  display: inline-block;
  vertical-align: middle;
  /* 2 */
  position: relative;
}
/* ========================================================================
   Component: Icon
 ========================================================================== */
@font-face {
  font-family: 'FontAwesome';
  src: url(/templates/yoo_master2/warp/vendor/uikit/fonts/fontawesome-webfont.eot);
  src: url(/templates/yoo_master2/warp/vendor/uikit/fonts/fontawesome-webfont.eot) format("embedded-opentype"), url(/templates/yoo_master2/warp/vendor/uikit/fonts/fontawesome-webfont.woff) format("woff"), url(/templates/yoo_master2/warp/vendor/uikit/fonts/fontawesome-webfont.ttf) format("truetype");
  font-weight: normal;
  font-style: normal;
}
/*
 * 1. Allow margin
 * 2. Prevent inherit font style
 * 4. Correct line-height
 * 5. Better font rendering
 */
[class*='uk-icon-'] {
  font-family: FontAwesome;
  /* 1 */
  display: inline-block;
  /* 2 */
  font-weight: normal;
  font-style: normal;
  /* 4 */
  line-height: 1;
  /* 5 */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* Size modifiers
 ========================================================================== */
.uk-icon-small:before {
  font-size: 150%;
  vertical-align: -10%;
}
.uk-icon-medium:before {
  font-size: 200%;
  vertical-align: -16%;
}
.uk-icon-large:before {
  font-size: 250%;
  vertical-align: -22%;
}
/* Modifier: `uk-icon-spin`
 ========================================================================== */
.uk-icon-spin {
  display: inline-block;
  -webkit-animation: uk-spin 2s infinite linear;
  animation: uk-spin 2s infinite linear;
}
/* Modifier: `uk-icon-button`
 ========================================================================== */
.uk-icon-button {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: inline-block;
  width: 35px;
  height: 35px;
  border-radius: 100%;
  background: #eeeeee;
  line-height: 35px;
  color: #444444;
  font-size: 18px;
  text-align: center;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.uk-icon-button:hover,
.uk-icon-button:focus {
  background-color: #f5f5f5;
  color: #0074a2;
  text-decoration: none;
  /* 2 */
  outline: none;
}
/* Active */
.uk-icon-button:active {
  background-color: #dddddd;
  color: #444444;
}
/* Icon mapping
 ========================================================================== */
.uk-icon-glass:before {
  content: "\f000";
}
.uk-icon-music:before {
  content: "\f001";
}
.uk-icon-search:before {
  content: "\f002";
}
.uk-icon-envelope-o:before {
  content: "\f003";
}
.uk-icon-heart:before {
  content: "\f004";
}
.uk-icon-star:before {
  content: "\f005";
}
.uk-icon-star-o:before {
  content: "\f006";
}
.uk-icon-user:before {
  content: "\f007";
}
.uk-icon-film:before {
  content: "\f008";
}
.uk-icon-th-large:before {
  content: "\f009";
}
.uk-icon-th:before {
  content: "\f00a";
}
.uk-icon-th-list:before {
  content: "\f00b";
}
.uk-icon-check:before {
  content: "\f00c";
}
.uk-icon-times:before {
  content: "\f00d";
}
.uk-icon-search-plus:before {
  content: "\f00e";
}
.uk-icon-search-minus:before {
  content: "\f010";
}
.uk-icon-power-off:before {
  content: "\f011";
}
.uk-icon-signal:before {
  content: "\f012";
}
.uk-icon-gear:before,
.uk-icon-cog:before {
  content: "\f013";
}
.uk-icon-trash-o:before {
  content: "\f014";
}
.uk-icon-home:before {
  content: "\f015";
}
.uk-icon-file-o:before {
  content: "\f016";
}
.uk-icon-clock-o:before {
  content: "\f017";
}
.uk-icon-road:before {
  content: "\f018";
}
.uk-icon-download:before {
  content: "\f019";
}
.uk-icon-arrow-circle-o-down:before {
  content: "\f01a";
}
.uk-icon-arrow-circle-o-up:before {
  content: "\f01b";
}
.uk-icon-inbox:before {
  content: "\f01c";
}
.uk-icon-play-circle-o:before {
  content: "\f01d";
}
.uk-icon-rotate-right:before,
.uk-icon-repeat:before {
  content: "\f01e";
}
.uk-icon-refresh:before {
  content: "\f021";
}
.uk-icon-list-alt:before {
  content: "\f022";
}
.uk-icon-lock:before {
  content: "\f023";
}
.uk-icon-flag:before {
  content: "\f024";
}
.uk-icon-headphones:before {
  content: "\f025";
}
.uk-icon-volume-off:before {
  content: "\f026";
}
.uk-icon-volume-down:before {
  content: "\f027";
}
.uk-icon-volume-up:before {
  content: "\f028";
}
.uk-icon-qrcode:before {
  content: "\f029";
}
.uk-icon-barcode:before {
  content: "\f02a";
}
.uk-icon-tag:before {
  content: "\f02b";
}
.uk-icon-tags:before {
  content: "\f02c";
}
.uk-icon-book:before {
  content: "\f02d";
}
.uk-icon-bookmark:before {
  content: "\f02e";
}
.uk-icon-print:before {
  content: "\f02f";
}
.uk-icon-camera:before {
  content: "\f030";
}
.uk-icon-font:before {
  content: "\f031";
}
.uk-icon-bold:before {
  content: "\f032";
}
.uk-icon-italic:before {
  content: "\f033";
}
.uk-icon-text-height:before {
  content: "\f034";
}
.uk-icon-text-width:before {
  content: "\f035";
}
.uk-icon-align-left:before {
  content: "\f036";
}
.uk-icon-align-center:before {
  content: "\f037";
}
.uk-icon-align-right:before {
  content: "\f038";
}
.uk-icon-align-justify:before {
  content: "\f039";
}
.uk-icon-list:before {
  content: "\f03a";
}
.uk-icon-dedent:before,
.uk-icon-outdent:before {
  content: "\f03b";
}
.uk-icon-indent:before {
  content: "\f03c";
}
.uk-icon-video-camera:before {
  content: "\f03d";
}
.uk-icon-photo:before,
.uk-icon-image:before,
.uk-icon-picture-o:before {
  content: "\f03e";
}
.uk-icon-pencil:before {
  content: "\f040";
}
.uk-icon-map-marker:before {
  content: "\f041";
}
.uk-icon-adjust:before {
  content: "\f042";
}
.uk-icon-tint:before {
  content: "\f043";
}
.uk-icon-edit:before,
.uk-icon-pencil-square-o:before {
  content: "\f044";
}
.uk-icon-share-square-o:before {
  content: "\f045";
}
.uk-icon-check-square-o:before {
  content: "\f046";
}
.uk-icon-arrows:before {
  content: "\f047";
}
.uk-icon-step-backward:before {
  content: "\f048";
}
.uk-icon-fast-backward:before {
  content: "\f049";
}
.uk-icon-backward:before {
  content: "\f04a";
}
.uk-icon-play:before {
  content: "\f04b";
}
.uk-icon-pause:before {
  content: "\f04c";
}
.uk-icon-stop:before {
  content: "\f04d";
}
.uk-icon-forward:before {
  content: "\f04e";
}
.uk-icon-fast-forward:before {
  content: "\f050";
}
.uk-icon-step-forward:before {
  content: "\f051";
}
.uk-icon-eject:before {
  content: "\f052";
}
.uk-icon-chevron-left:before {
  content: "\f053";
}
.uk-icon-chevron-right:before {
  content: "\f054";
}
.uk-icon-plus-circle:before {
  content: "\f055";
}
.uk-icon-minus-circle:before {
  content: "\f056";
}
.uk-icon-times-circle:before {
  content: "\f057";
}
.uk-icon-check-circle:before {
  content: "\f058";
}
.uk-icon-question-circle:before {
  content: "\f059";
}
.uk-icon-info-circle:before {
  content: "\f05a";
}
.uk-icon-crosshairs:before {
  content: "\f05b";
}
.uk-icon-times-circle-o:before {
  content: "\f05c";
}
.uk-icon-check-circle-o:before {
  content: "\f05d";
}
.uk-icon-ban:before {
  content: "\f05e";
}
.uk-icon-arrow-left:before {
  content: "\f060";
}
.uk-icon-arrow-right:before {
  content: "\f061";
}
.uk-icon-arrow-up:before {
  content: "\f062";
}
.uk-icon-arrow-down:before {
  content: "\f063";
}
.uk-icon-mail-forward:before,
.uk-icon-share:before {
  content: "\f064";
}
.uk-icon-expand:before {
  content: "\f065";
}
.uk-icon-compress:before {
  content: "\f066";
}
.uk-icon-plus:before {
  content: "\f067";
}
.uk-icon-minus:before {
  content: "\f068";
}
.uk-icon-asterisk:before {
  content: "\f069";
}
.uk-icon-exclamation-circle:before {
  content: "\f06a";
}
.uk-icon-gift:before {
  content: "\f06b";
}
.uk-icon-leaf:before {
  content: "\f06c";
}
.uk-icon-fire:before {
  content: "\f06d";
}
.uk-icon-eye:before {
  content: "\f06e";
}
.uk-icon-eye-slash:before {
  content: "\f070";
}
.uk-icon-warning:before,
.uk-icon-exclamation-triangle:before {
  content: "\f071";
}
.uk-icon-plane:before {
  content: "\f072";
}
.uk-icon-calendar:before {
  content: "\f073";
}
.uk-icon-random:before {
  content: "\f074";
}
.uk-icon-comment:before {
  content: "\f075";
}
.uk-icon-magnet:before {
  content: "\f076";
}
.uk-icon-chevron-up:before {
  content: "\f077";
}
.uk-icon-chevron-down:before {
  content: "\f078";
}
.uk-icon-retweet:before {
  content: "\f079";
}
.uk-icon-shopping-cart:before {
  content: "\f07a";
}
.uk-icon-folder:before {
  content: "\f07b";
}
.uk-icon-folder-open:before {
  content: "\f07c";
}
.uk-icon-arrows-v:before {
  content: "\f07d";
}
.uk-icon-arrows-h:before {
  content: "\f07e";
}
.uk-icon-bar-chart-o:before {
  content: "\f080";
}
.uk-icon-twitter-square:before {
  content: "\f081";
}
.uk-icon-facebook-square:before {
  content: "\f082";
}
.uk-icon-camera-retro:before {
  content: "\f083";
}
.uk-icon-key:before {
  content: "\f084";
}
.uk-icon-gears:before,
.uk-icon-cogs:before {
  content: "\f085";
}
.uk-icon-comments:before {
  content: "\f086";
}
.uk-icon-thumbs-o-up:before {
  content: "\f087";
}
.uk-icon-thumbs-o-down:before {
  content: "\f088";
}
.uk-icon-star-half:before {
  content: "\f089";
}
.uk-icon-heart-o:before {
  content: "\f08a";
}
.uk-icon-sign-out:before {
  content: "\f08b";
}
.uk-icon-linkedin-square:before {
  content: "\f08c";
}
.uk-icon-thumb-tack:before {
  content: "\f08d";
}
.uk-icon-external-link:before {
  content: "\f08e";
}
.uk-icon-sign-in:before {
  content: "\f090";
}
.uk-icon-trophy:before {
  content: "\f091";
}
.uk-icon-github-square:before {
  content: "\f092";
}
.uk-icon-upload:before {
  content: "\f093";
}
.uk-icon-lemon-o:before {
  content: "\f094";
}
.uk-icon-phone:before {
  content: "\f095";
}
.uk-icon-square-o:before {
  content: "\f096";
}
.uk-icon-bookmark-o:before {
  content: "\f097";
}
.uk-icon-phone-square:before {
  content: "\f098";
}
.uk-icon-twitter:before {
  content: "\f099";
}
.uk-icon-facebook:before {
  content: "\f09a";
}
.uk-icon-github:before {
  content: "\f09b";
}
.uk-icon-unlock:before {
  content: "\f09c";
}
.uk-icon-credit-card:before {
  content: "\f09d";
}
.uk-icon-rss:before {
  content: "\f09e";
}
.uk-icon-hdd-o:before {
  content: "\f0a0";
}
.uk-icon-bullhorn:before {
  content: "\f0a1";
}
.uk-icon-bell:before {
  content: "\f0f3";
}
.uk-icon-certificate:before {
  content: "\f0a3";
}
.uk-icon-hand-o-right:before {
  content: "\f0a4";
}
.uk-icon-hand-o-left:before {
  content: "\f0a5";
}
.uk-icon-hand-o-up:before {
  content: "\f0a6";
}
.uk-icon-hand-o-down:before {
  content: "\f0a7";
}
.uk-icon-arrow-circle-left:before {
  content: "\f0a8";
}
.uk-icon-arrow-circle-right:before {
  content: "\f0a9";
}
.uk-icon-arrow-circle-up:before {
  content: "\f0aa";
}
.uk-icon-arrow-circle-down:before {
  content: "\f0ab";
}
.uk-icon-globe:before {
  content: "\f0ac";
}
.uk-icon-wrench:before {
  content: "\f0ad";
}
.uk-icon-tasks:before {
  content: "\f0ae";
}
.uk-icon-filter:before {
  content: "\f0b0";
}
.uk-icon-briefcase:before {
  content: "\f0b1";
}
.uk-icon-arrows-alt:before {
  content: "\f0b2";
}
.uk-icon-group:before,
.uk-icon-users:before {
  content: "\f0c0";
}
.uk-icon-chain:before,
.uk-icon-link:before {
  content: "\f0c1";
}
.uk-icon-cloud:before {
  content: "\f0c2";
}
.uk-icon-flask:before {
  content: "\f0c3";
}
.uk-icon-cut:before,
.uk-icon-scissors:before {
  content: "\f0c4";
}
.uk-icon-copy:before,
.uk-icon-files-o:before {
  content: "\f0c5";
}
.uk-icon-paperclip:before {
  content: "\f0c6";
}
.uk-icon-save:before,
.uk-icon-floppy-o:before {
  content: "\f0c7";
}
.uk-icon-square:before {
  content: "\f0c8";
}
.uk-icon-navicon:before,
.uk-icon-reorder:before,
.uk-icon-bars:before {
  content: "\f0c9";
}
.uk-icon-list-ul:before {
  content: "\f0ca";
}
.uk-icon-list-ol:before {
  content: "\f0cb";
}
.uk-icon-strikethrough:before {
  content: "\f0cc";
}
.uk-icon-underline:before {
  content: "\f0cd";
}
.uk-icon-table:before {
  content: "\f0ce";
}
.uk-icon-magic:before {
  content: "\f0d0";
}
.uk-icon-truck:before {
  content: "\f0d1";
}
.uk-icon-pinterest:before {
  content: "\f0d2";
}
.uk-icon-pinterest-square:before {
  content: "\f0d3";
}
.uk-icon-google-plus-square:before {
  content: "\f0d4";
}
.uk-icon-google-plus:before {
  content: "\f0d5";
}
.uk-icon-money:before {
  content: "\f0d6";
}
.uk-icon-caret-down:before {
  content: "\f0d7";
}
.uk-icon-caret-up:before {
  content: "\f0d8";
}
.uk-icon-caret-left:before {
  content: "\f0d9";
}
.uk-icon-caret-right:before {
  content: "\f0da";
}
.uk-icon-columns:before {
  content: "\f0db";
}
.uk-icon-unsorted:before,
.uk-icon-sort:before {
  content: "\f0dc";
}
.uk-icon-sort-down:before,
.uk-icon-sort-desc:before {
  content: "\f0dd";
}
.uk-icon-sort-up:before,
.uk-icon-sort-asc:before {
  content: "\f0de";
}
.uk-icon-envelope:before {
  content: "\f0e0";
}
.uk-icon-linkedin:before {
  content: "\f0e1";
}
.uk-icon-rotate-left:before,
.uk-icon-undo:before {
  content: "\f0e2";
}
.uk-icon-legal:before,
.uk-icon-gavel:before {
  content: "\f0e3";
}
.uk-icon-dashboard:before,
.uk-icon-tachometer:before {
  content: "\f0e4";
}
.uk-icon-comment-o:before {
  content: "\f0e5";
}
.uk-icon-comments-o:before {
  content: "\f0e6";
}
.uk-icon-flash:before,
.uk-icon-bolt:before {
  content: "\f0e7";
}
.uk-icon-sitemap:before {
  content: "\f0e8";
}
.uk-icon-umbrella:before {
  content: "\f0e9";
}
.uk-icon-paste:before,
.uk-icon-clipboard:before {
  content: "\f0ea";
}
.uk-icon-lightbulb-o:before {
  content: "\f0eb";
}
.uk-icon-exchange:before {
  content: "\f0ec";
}
.uk-icon-cloud-download:before {
  content: "\f0ed";
}
.uk-icon-cloud-upload:before {
  content: "\f0ee";
}
.uk-icon-user-md:before {
  content: "\f0f0";
}
.uk-icon-stethoscope:before {
  content: "\f0f1";
}
.uk-icon-suitcase:before {
  content: "\f0f2";
}
.uk-icon-bell-o:before {
  content: "\f0a2";
}
.uk-icon-coffee:before {
  content: "\f0f4";
}
.uk-icon-cutlery:before {
  content: "\f0f5";
}
.uk-icon-file-text-o:before {
  content: "\f0f6";
}
.uk-icon-building-o:before {
  content: "\f0f7";
}
.uk-icon-hospital-o:before {
  content: "\f0f8";
}
.uk-icon-ambulance:before {
  content: "\f0f9";
}
.uk-icon-medkit:before {
  content: "\f0fa";
}
.uk-icon-fighter-jet:before {
  content: "\f0fb";
}
.uk-icon-beer:before {
  content: "\f0fc";
}
.uk-icon-h-square:before {
  content: "\f0fd";
}
.uk-icon-plus-square:before {
  content: "\f0fe";
}
.uk-icon-angle-double-left:before {
  content: "\f100";
}
.uk-icon-angle-double-right:before {
  content: "\f101";
}
.uk-icon-angle-double-up:before {
  content: "\f102";
}
.uk-icon-angle-double-down:before {
  content: "\f103";
}
.uk-icon-angle-left:before {
  content: "\f104";
}
.uk-icon-angle-right:before {
  content: "\f105";
}
.uk-icon-angle-up:before {
  content: "\f106";
}
.uk-icon-angle-down:before {
  content: "\f107";
}
.uk-icon-desktop:before {
  content: "\f108";
}
.uk-icon-laptop:before {
  content: "\f109";
}
.uk-icon-tablet:before {
  content: "\f10a";
}
.uk-icon-mobile-phone:before,
.uk-icon-mobile:before {
  content: "\f10b";
}
.uk-icon-circle-o:before {
  content: "\f10c";
}
.uk-icon-quote-left:before {
  content: "\f10d";
}
.uk-icon-quote-right:before {
  content: "\f10e";
}
.uk-icon-spinner:before {
  content: "\f110";
}
.uk-icon-circle:before {
  content: "\f111";
}
.uk-icon-mail-reply:before,
.uk-icon-reply:before {
  content: "\f112";
}
.uk-icon-github-alt:before {
  content: "\f113";
}
.uk-icon-folder-o:before {
  content: "\f114";
}
.uk-icon-folder-open-o:before {
  content: "\f115";
}
.uk-icon-smile-o:before {
  content: "\f118";
}
.uk-icon-frown-o:before {
  content: "\f119";
}
.uk-icon-meh-o:before {
  content: "\f11a";
}
.uk-icon-gamepad:before {
  content: "\f11b";
}
.uk-icon-keyboard-o:before {
  content: "\f11c";
}
.uk-icon-flag-o:before {
  content: "\f11d";
}
.uk-icon-flag-checkered:before {
  content: "\f11e";
}
.uk-icon-terminal:before {
  content: "\f120";
}
.uk-icon-code:before {
  content: "\f121";
}
.uk-icon-mail-reply-all:before,
.uk-icon-reply-all:before {
  content: "\f122";
}
.uk-icon-star-half-empty:before,
.uk-icon-star-half-full:before,
.uk-icon-star-half-o:before {
  content: "\f123";
}
.uk-icon-location-arrow:before {
  content: "\f124";
}
.uk-icon-crop:before {
  content: "\f125";
}
.uk-icon-code-fork:before {
  content: "\f126";
}
.uk-icon-unlink:before,
.uk-icon-chain-broken:before {
  content: "\f127";
}
.uk-icon-question:before {
  content: "\f128";
}
.uk-icon-info:before {
  content: "\f129";
}
.uk-icon-exclamation:before {
  content: "\f12a";
}
.uk-icon-superscript:before {
  content: "\f12b";
}
.uk-icon-subscript:before {
  content: "\f12c";
}
.uk-icon-eraser:before {
  content: "\f12d";
}
.uk-icon-puzzle-piece:before {
  content: "\f12e";
}
.uk-icon-microphone:before {
  content: "\f130";
}
.uk-icon-microphone-slash:before {
  content: "\f131";
}
.uk-icon-shield:before {
  content: "\f132";
}
.uk-icon-calendar-o:before {
  content: "\f133";
}
.uk-icon-fire-extinguisher:before {
  content: "\f134";
}
.uk-icon-rocket:before {
  content: "\f135";
}
.uk-icon-maxcdn:before {
  content: "\f136";
}
.uk-icon-chevron-circle-left:before {
  content: "\f137";
}
.uk-icon-chevron-circle-right:before {
  content: "\f138";
}
.uk-icon-chevron-circle-up:before {
  content: "\f139";
}
.uk-icon-chevron-circle-down:before {
  content: "\f13a";
}
.uk-icon-html5:before {
  content: "\f13b";
}
.uk-icon-css3:before {
  content: "\f13c";
}
.uk-icon-anchor:before {
  content: "\f13d";
}
.uk-icon-unlock-alt:before {
  content: "\f13e";
}
.uk-icon-bullseye:before {
  content: "\f140";
}
.uk-icon-ellipsis-h:before {
  content: "\f141";
}
.uk-icon-ellipsis-v:before {
  content: "\f142";
}
.uk-icon-rss-square:before {
  content: "\f143";
}
.uk-icon-play-circle:before {
  content: "\f144";
}
.uk-icon-ticket:before {
  content: "\f145";
}
.uk-icon-minus-square:before {
  content: "\f146";
}
.uk-icon-minus-square-o:before {
  content: "\f147";
}
.uk-icon-level-up:before {
  content: "\f148";
}
.uk-icon-level-down:before {
  content: "\f149";
}
.uk-icon-check-square:before {
  content: "\f14a";
}
.uk-icon-pencil-square:before {
  content: "\f14b";
}
.uk-icon-external-link-square:before {
  content: "\f14c";
}
.uk-icon-share-square:before {
  content: "\f14d";
}
.uk-icon-compass:before {
  content: "\f14e";
}
.uk-icon-toggle-down:before,
.uk-icon-caret-square-o-down:before {
  content: "\f150";
}
.uk-icon-toggle-up:before,
.uk-icon-caret-square-o-up:before {
  content: "\f151";
}
.uk-icon-toggle-right:before,
.uk-icon-caret-square-o-right:before {
  content: "\f152";
}
.uk-icon-euro:before,
.uk-icon-eur:before {
  content: "\f153";
}
.uk-icon-gbp:before {
  content: "\f154";
}
.uk-icon-dollar:before,
.uk-icon-usd:before {
  content: "\f155";
}
.uk-icon-rupee:before,
.uk-icon-inr:before {
  content: "\f156";
}
.uk-icon-cny:before,
.uk-icon-rmb:before,
.uk-icon-yen:before,
.uk-icon-jpy:before {
  content: "\f157";
}
.uk-icon-ruble:before,
.uk-icon-rouble:before,
.uk-icon-rub:before {
  content: "\f158";
}
.uk-icon-won:before,
.uk-icon-krw:before {
  content: "\f159";
}
.uk-icon-bitcoin:before,
.uk-icon-btc:before {
  content: "\f15a";
}
.uk-icon-file:before {
  content: "\f15b";
}
.uk-icon-file-text:before {
  content: "\f15c";
}
.uk-icon-sort-alpha-asc:before {
  content: "\f15d";
}
.uk-icon-sort-alpha-desc:before {
  content: "\f15e";
}
.uk-icon-sort-amount-asc:before {
  content: "\f160";
}
.uk-icon-sort-amount-desc:before {
  content: "\f161";
}
.uk-icon-sort-numeric-asc:before {
  content: "\f162";
}
.uk-icon-sort-numeric-desc:before {
  content: "\f163";
}
.uk-icon-thumbs-up:before {
  content: "\f164";
}
.uk-icon-thumbs-down:before {
  content: "\f165";
}
.uk-icon-youtube-square:before {
  content: "\f166";
}
.uk-icon-youtube:before {
  content: "\f167";
}
.uk-icon-xing:before {
  content: "\f168";
}
.uk-icon-xing-square:before {
  content: "\f169";
}
.uk-icon-youtube-play:before {
  content: "\f16a";
}
.uk-icon-dropbox:before {
  content: "\f16b";
}
.uk-icon-stack-overflow:before {
  content: "\f16c";
}
.uk-icon-instagram:before {
  content: "\f16d";
}
.uk-icon-flickr:before {
  content: "\f16e";
}
.uk-icon-adn:before {
  content: "\f170";
}
.uk-icon-bitbucket:before {
  content: "\f171";
}
.uk-icon-bitbucket-square:before {
  content: "\f172";
}
.uk-icon-tumblr:before {
  content: "\f173";
}
.uk-icon-tumblr-square:before {
  content: "\f174";
}
.uk-icon-long-arrow-down:before {
  content: "\f175";
}
.uk-icon-long-arrow-up:before {
  content: "\f176";
}
.uk-icon-long-arrow-left:before {
  content: "\f177";
}
.uk-icon-long-arrow-right:before {
  content: "\f178";
}
.uk-icon-apple:before {
  content: "\f179";
}
.uk-icon-windows:before {
  content: "\f17a";
}
.uk-icon-android:before {
  content: "\f17b";
}
.uk-icon-linux:before {
  content: "\f17c";
}
.uk-icon-dribbble:before {
  content: "\f17d";
}
.uk-icon-skype:before {
  content: "\f17e";
}
.uk-icon-foursquare:before {
  content: "\f180";
}
.uk-icon-trello:before {
  content: "\f181";
}
.uk-icon-female:before {
  content: "\f182";
}
.uk-icon-male:before {
  content: "\f183";
}
.uk-icon-gittip:before {
  content: "\f184";
}
.uk-icon-sun-o:before {
  content: "\f185";
}
.uk-icon-moon-o:before {
  content: "\f186";
}
.uk-icon-archive:before {
  content: "\f187";
}
.uk-icon-bug:before {
  content: "\f188";
}
.uk-icon-vk:before {
  content: "\f189";
}
.uk-icon-weibo:before {
  content: "\f18a";
}
.uk-icon-renren:before {
  content: "\f18b";
}
.uk-icon-pagelines:before {
  content: "\f18c";
}
.uk-icon-stack-exchange:before {
  content: "\f18d";
}
.uk-icon-arrow-circle-o-right:before {
  content: "\f18e";
}
.uk-icon-arrow-circle-o-left:before {
  content: "\f190";
}
.uk-icon-toggle-left:before,
.uk-icon-caret-square-o-left:before {
  content: "\f191";
}
.uk-icon-dot-circle-o:before {
  content: "\f192";
}
.uk-icon-wheelchair:before {
  content: "\f193";
}
.uk-icon-vimeo-square:before {
  content: "\f194";
}
.uk-icon-turkish-lira:before,
.uk-icon-try:before {
  content: "\f195";
}
.uk-icon-plus-square-o:before {
  content: "\f196";
}
.uk-icon-space-shuttle:before {
  content: "\f197";
}
.uk-icon-slack:before {
  content: "\f198";
}
.uk-icon-envelope-square:before {
  content: "\f199";
}
.uk-icon-wordpress:before {
  content: "\f19a";
}
.uk-icon-openid:before {
  content: "\f19b";
}
.uk-icon-institution:before,
.uk-icon-bank:before,
.uk-icon-university:before {
  content: "\f19c";
}
.uk-icon-mortar-board:before,
.uk-icon-graduation-cap:before {
  content: "\f19d";
}
.uk-icon-yahoo:before {
  content: "\f19e";
}
.uk-icon-google:before {
  content: "\f1a0";
}
.uk-icon-reddit:before {
  content: "\f1a1";
}
.uk-icon-reddit-square:before {
  content: "\f1a2";
}
.uk-icon-stumbleupon-circle:before {
  content: "\f1a3";
}
.uk-icon-stumbleupon:before {
  content: "\f1a4";
}
.uk-icon-delicious:before {
  content: "\f1a5";
}
.uk-icon-digg:before {
  content: "\f1a6";
}
.uk-icon-pied-piper-square:before,
.uk-icon-pied-piper:before {
  content: "\f1a7";
}
.uk-icon-pied-piper-alt:before {
  content: "\f1a8";
}
.uk-icon-drupal:before {
  content: "\f1a9";
}
.uk-icon-joomla:before {
  content: "\f1aa";
}
.uk-icon-language:before {
  content: "\f1ab";
}
.uk-icon-fax:before {
  content: "\f1ac";
}
.uk-icon-building:before {
  content: "\f1ad";
}
.uk-icon-child:before {
  content: "\f1ae";
}
.uk-icon-paw:before {
  content: "\f1b0";
}
.uk-icon-spoon:before {
  content: "\f1b1";
}
.uk-icon-cube:before {
  content: "\f1b2";
}
.uk-icon-cubes:before {
  content: "\f1b3";
}
.uk-icon-behance:before {
  content: "\f1b4";
}
.uk-icon-behance-square:before {
  content: "\f1b5";
}
.uk-icon-steam:before {
  content: "\f1b6";
}
.uk-icon-steam-square:before {
  content: "\f1b7";
}
.uk-icon-recycle:before {
  content: "\f1b8";
}
.uk-icon-automobile:before,
.uk-icon-car:before {
  content: "\f1b9";
}
.uk-icon-cab:before,
.uk-icon-taxi:before {
  content: "\f1ba";
}
.uk-icon-tree:before {
  content: "\f1bb";
}
.uk-icon-spotify:before {
  content: "\f1bc";
}
.uk-icon-deviantart:before {
  content: "\f1bd";
}
.uk-icon-soundcloud:before {
  content: "\f1be";
}
.uk-icon-database:before {
  content: "\f1c0";
}
.uk-icon-file-pdf-o:before {
  content: "\f1c1";
}
.uk-icon-file-word-o:before {
  content: "\f1c2";
}
.uk-icon-file-excel-o:before {
  content: "\f1c3";
}
.uk-icon-file-powerpoint-o:before {
  content: "\f1c4";
}
.uk-icon-file-photo-o:before,
.uk-icon-file-picture-o:before,
.uk-icon-file-image-o:before {
  content: "\f1c5";
}
.uk-icon-file-zip-o:before,
.uk-icon-file-archive-o:before {
  content: "\f1c6";
}
.uk-icon-file-sound-o:before,
.uk-icon-file-audio-o:before {
  content: "\f1c7";
}
.uk-icon-file-movie-o:before,
.uk-icon-file-video-o:before {
  content: "\f1c8";
}
.uk-icon-file-code-o:before {
  content: "\f1c9";
}
.uk-icon-vine:before {
  content: "\f1ca";
}
.uk-icon-codepen:before {
  content: "\f1cb";
}
.uk-icon-jsfiddle:before {
  content: "\f1cc";
}
.uk-icon-life-bouy:before,
.uk-icon-life-saver:before,
.uk-icon-support:before,
.uk-icon-life-ring:before {
  content: "\f1cd";
}
.uk-icon-circle-o-notch:before {
  content: "\f1ce";
}
.uk-icon-ra:before,
.uk-icon-rebel:before {
  content: "\f1d0";
}
.uk-icon-ge:before,
.uk-icon-empire:before {
  content: "\f1d1";
}
.uk-icon-git-square:before {
  content: "\f1d2";
}
.uk-icon-git:before {
  content: "\f1d3";
}
.uk-icon-hacker-news:before {
  content: "\f1d4";
}
.uk-icon-tencent-weibo:before {
  content: "\f1d5";
}
.uk-icon-qq:before {
  content: "\f1d6";
}
.uk-icon-wechat:before,
.uk-icon-weixin:before {
  content: "\f1d7";
}
.uk-icon-send:before,
.uk-icon-paper-plane:before {
  content: "\f1d8";
}
.uk-icon-send-o:before,
.uk-icon-paper-plane-o:before {
  content: "\f1d9";
}
.uk-icon-history:before {
  content: "\f1da";
}
.uk-icon-circle-thin:before {
  content: "\f1db";
}
.uk-icon-header:before {
  content: "\f1dc";
}
.uk-icon-paragraph:before {
  content: "\f1dd";
}
.uk-icon-sliders:before {
  content: "\f1de";
}
.uk-icon-share-alt:before {
  content: "\f1e0";
}
.uk-icon-share-alt-square:before {
  content: "\f1e1";
}
.uk-icon-bomb:before {
  content: "\f1e2";
}
/* ========================================================================
   Component: Close
 ========================================================================== */
/*
 * 1. Required for `button` elements and makes
 *    close button more robust against different box-sizing use
 * 2. Style
 * 3. Required for `button` elements
 * 4. Needed for Safari
 */
.uk-close {
  /* 1 */
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  /* 2 */
  display: inline-block;
  width: 20px;
  line-height: 20px;
  text-align: center;
  color: inherit;
  opacity: 0.3;
  /* 3. */
  padding: 0;
  border: 0;
  -webkit-appearance: none;
  /* 4. */
  background: transparent;
}
/* Icon */
.uk-close:after {
  display: block;
  content: "\f00d";
  font-family: FontAwesome;
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 * 3. Required for `a` elements
 */
.uk-close:hover,
.uk-close:focus {
  opacity: 0.5;
  /* 2 */
  outline: none;
  /* 3 */
  color: inherit;
  text-decoration: none;
  cursor: pointer;
}
/* Modifier
 ========================================================================== */
.uk-close-alt {
  padding: 2px;
  border-radius: 50%;
  background: #eeeeee;
  opacity: 1;
}
/* Hover */
.uk-close-alt:hover,
.uk-close-alt:focus {
  opacity: 1;
}
/* Icon */
.uk-close-alt:after {
  opacity: 0.5;
}
.uk-close-alt:hover:after,
.uk-close-alt:focus:after {
  opacity: 0.8;
}
/* ========================================================================
   Component: Badge
 ========================================================================== */
.uk-badge {
  display: inline-block;
  padding: 0 5px;
  background: #00a8e6;
  font-size: 11px;
  font-weight: normal;
  line-height: 15px;
  color: #ffffff;
  text-align: center;
  vertical-align: middle;
  text-transform: none;
}
/* Modifier: `uk-badge-notification`;
 ========================================================================== */
.uk-badge-notification {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  min-width: 18px;
  border-radius: 500px;
  font-size: 12px;
  line-height: 18px;
}
/* Color modifier
 ========================================================================== */
/*
 * Modifier: `uk-badge-success`
 */
.uk-badge-success {
  background-color: #8cc14c;
}
/*
 * Modifier: `uk-badge-warning`
 */
.uk-badge-warning {
  background-color: #faa732;
}
/*
 * Modifier: `uk-badge-danger`
 */
.uk-badge-danger {
  background-color: #da314b;
}
/* ========================================================================
   Component: Alert
 ========================================================================== */
.uk-alert {
  margin-bottom: 20px;
  padding: 10px;
  background: #ebf7fd;
  color: #2d7091;
}
/*
 * Add margin if adjacent element
 */
* + .uk-alert {
  margin-top: 20px;
}
/*
 * Remove margin from the last-child
 */
.uk-alert > :last-child {
  margin-bottom: 0;
}
/*
 * Keep color for headings if the default heading color is changed
 */
.uk-alert h1,
.uk-alert h2,
.uk-alert h3,
.uk-alert h4,
.uk-alert h5,
.uk-alert h6 {
  color: inherit;
}
/* Close in alert
 ========================================================================== */
.uk-alert > .uk-close:first-child {
  float: right;
}
/*
 * Remove margin from adjacent element
 */
.uk-alert > .uk-close:first-child + * {
  margin-top: 0;
}
/* Modifier: `uk-alert-success`
 ========================================================================== */
.uk-alert-success {
  background: #f2fae3;
  color: #659f13;
}
/* Modifier: `uk-alert-warning`
 ========================================================================== */
.uk-alert-warning {
  background: #fffceb;
  color: #e28327;
}
/* Modifier: `uk-alert-danger`
 ========================================================================== */
.uk-alert-danger {
  background: #fff1f0;
  color: #d85030;
}
/* Modifier: `uk-alert-large`
 ========================================================================== */
.uk-alert-large {
  padding: 20px;
}
.uk-alert-large > .uk-close:first-child {
  margin: -10px -10px 0 0;
}
/* ========================================================================
   Component: Thumbnail
 ========================================================================== */
/*
 * 1. Corrects max-width behavior (2.) if padding and border are used
 * 2. Responsive behavior
 * 3. Required for `figure` element
 * 4. Style
 */
.uk-thumbnail {
  display: inline-block;
  /* 1 */
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  /* 2 */
  max-width: 100%;
  /* 3 */
  margin: 0;
  /* 4 */
  padding: 4px;
  border: 1px solid #dddddd;
  background: #ffffff;
}
/*
 * Hover state for `a` elements
 * 1. Apply hover style also to focus state
 * 2. Needed for caption
 * 3. Remove default focus style
 */
a.uk-thumbnail:hover,
a.uk-thumbnail:focus {
  border-color: #aaaaaa;
  background-color: #ffffff;
  /* 2 */
  text-decoration: none;
  /* 3 */
  outline: none;
}
/* Caption
 ========================================================================== */
.uk-thumbnail-caption {
  padding-top: 4px;
  text-align: center;
  color: #444444;
}
/* Sizes
 ========================================================================== */
.uk-thumbnail-mini {
  width: 150px;
}
.uk-thumbnail-small {
  width: 200px;
}
.uk-thumbnail-medium {
  width: 300px;
}
.uk-thumbnail-large {
  width: 400px;
}
.uk-thumbnail-expand,
.uk-thumbnail-expand > img {
  width: 100%;
}
/* ========================================================================
   Component: Overlay
 ========================================================================== */
/*
 * 1. Container width fits its content
 * 2. Create position context
 * 3. Set max-width for responsive images to prevent `inline-block` consequences
 * 4. Remove the gap between the container and its child element
 * 5. Fixed wrong scaling calculation for images in Chrome
 */
.uk-overlay {
  /* 1 */
  display: inline-block;
  /* 2 */
  position: relative;
  /* 3 */
  max-width: 100%;
  /* 4 */
  vertical-align: middle;
  /* 5 */
  overflow: hidden;
}
/*
 * Remove margin from content
 */
.uk-overlay > :first-child {
  margin-bottom: 0;
}
/* Sub-object `uk-overlay-area`
 ========================================================================== */
/*
 * 1. Set position
 * 2. Set style
 * 3. Fade-in transition
 */
.uk-overlay-area {
  /* 1 */
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  /* 2 */
  background: rgba(0, 0, 0, 0.3);
  /* 3 */
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
  -webkit-transform: translate3d(0, 0, 0);
}
/*
 * Hover
 * 1. `uk-hover` to support touch devices
 * 2. Use optional `uk-overlay-toggle` to trigger the overlay earlier
 */
.uk-overlay:hover .uk-overlay-area,
.uk-overlay.uk-hover .uk-overlay-area,
.uk-overlay-toggle:hover .uk-overlay-area,
.uk-overlay-toggle.uk-hover .uk-overlay-area {
  opacity: 1;
}
/*
 * Icon
 */
.uk-overlay-area:empty:before {
  content: "\f002";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 50px;
  height: 50px;
  margin-top: -25px;
  margin-left: -25px;
  font-size: 50px;
  line-height: 1;
  font-family: FontAwesome;
  text-align: center;
  color: #ffffff;
}
/* Sub-object `uk-overlay-area-content`
 ========================================================================== */
/*
 * Remove whitespace between child elements when using `inline-block`
 * Needed for Firefox
 */
.uk-overlay-area:not(:empty) {
  font-size: 0.001px;
}
/*
 * 1. Needed for vertical alignment
 */
.uk-overlay-area:not(:empty):before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
/*
 * 1. Set vertical alignment
 * 2. Reset whitespace hack
 * 3. Set horizontal alignment
 * 4. Set style
 */
.uk-overlay-area-content {
  /* 1 */
  display: inline-block;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  vertical-align: middle;
  /* 2 */
  font-size: 1rem;
  /* 3 */
  text-align: center;
  /* 4 */
  padding: 0 15px;
  color: #ffffff;
}
/*
 * Remove margin from the last-child
 */
.uk-overlay-area-content > :last-child {
  margin-bottom: 0;
}
/*
 * Links in overlay area
 */
.uk-overlay-area-content a:not([class]),
.uk-overlay-area-content a:not([class]):hover {
  color: inherit;
}
/* Sub-object `uk-overlay-caption`
 ========================================================================== */
/*
 * 1. Set position
 * 2. Set style
 * 3. Fade-in transition
 */
.uk-overlay-caption {
  /* 1 */
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  /* 2 */
  padding: 20px;
  background: rgba(0, 0, 0, 0.5);
  color: #ffffff;
  /* 3 */
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
  -webkit-transform: translate3d(0, 0, 0);
}
/*
 * Hover
 * 1. `uk-hover` to support touch devices
 * 2. Use optional `uk-overlay-toggle` to trigger the overlay earlier
 */
.uk-overlay:hover .uk-overlay-caption,
.uk-overlay.uk-hover .uk-overlay-caption,
.uk-overlay-toggle:hover .uk-overlay-caption,
.uk-overlay-toggle.uk-hover .uk-overlay-caption {
  opacity: 1;
}
/* ========================================================================
   Component: Progress
 ========================================================================== */
/*
 * 1. Clearing
 * 2. Vertical alignment if text is used
 */
.uk-progress {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  height: 20px;
  margin-bottom: 20px;
  background: #eeeeee;
  /* 1 */
  overflow: hidden;
  /* 2 */
  line-height: 20px;
}
/*
 * Add margin if adjacent element
 */
* + .uk-progress {
  margin-top: 20px;
}
/* Sub-object: `uk-progress-bar`
 ========================================================================== */
/*
 * 1. Transition
 * 2. Needed for text
 */
.uk-progress-bar {
  width: 0;
  height: 100%;
  background: #00a8e6;
  float: left;
  /* 1 */
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease;
  /* 2 */
  font-size: 12px;
  color: #ffffff;
  text-align: center;
}
/* Size modifiers
 ========================================================================== */
/* Mini */
.uk-progress-mini {
  height: 6px;
}
/* Small */
.uk-progress-small {
  height: 12px;
}
/* Color modifiers
 ========================================================================== */
.uk-progress-success .uk-progress-bar {
  background-color: #8cc14c;
}
.uk-progress-warning .uk-progress-bar {
  background-color: #faa732;
}
.uk-progress-danger .uk-progress-bar {
  background-color: #da314b;
}
/* Modifier: `uk-progress-striped`
 ========================================================================== */
.uk-progress-striped .uk-progress-bar {
  background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 30px 30px;
}
/*
 * Animation
 */
.uk-progress-striped.uk-active .uk-progress-bar {
  -webkit-animation: uk-progress-bar-stripes 2s linear infinite;
  animation: uk-progress-bar-stripes 2s linear infinite;
}
@-webkit-keyframes uk-progress-bar-stripes {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 30px 0;
  }
}
@keyframes uk-progress-bar-stripes {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 30px 0;
  }
}
/* ========================================================================
   Component: Animation
 ========================================================================== */
[class*='uk-animation-'] {
  -webkit-animation-duration: 0.5s;
  animation-duration: 0.5s;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
/* Hide animated element if scrollspy is used */
@media screen {
  [data-uk-scrollspy*='uk-animation-'] {
    opacity: 0;
  }
}
/*
 * Fade
 */
.uk-animation-fade {
  -webkit-animation-name: uk-fade;
  animation-name: uk-fade;
  -webkit-animation-duration: 0.8s;
  animation-duration: 0.8s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
}
/*
 * Scale
 */
.uk-animation-scale-up {
  -webkit-animation-name: uk-scale-up;
  animation-name: uk-scale-up;
}
.uk-animation-scale-down {
  -webkit-animation-name: uk-scale-down;
  animation-name: uk-scale-down;
}
/*
 * Slide
 */
.uk-animation-slide-top {
  -webkit-animation-name: uk-slide-top;
  animation-name: uk-slide-top;
}
.uk-animation-slide-bottom {
  -webkit-animation-name: uk-slide-bottom;
  animation-name: uk-slide-bottom;
}
.uk-animation-slide-left {
  -webkit-animation-name: uk-slide-left;
  animation-name: uk-slide-left;
}
.uk-animation-slide-right {
  -webkit-animation-name: uk-slide-right;
  animation-name: uk-slide-right;
}
/*
 * Shake
 */
.uk-animation-shake {
  -webkit-animation-name: uk-shake;
  animation-name: uk-shake;
}
/* Modifiers
 ========================================================================== */
.uk-animation-reverse {
  -webkit-animation-direction: reverse;
  animation-direction: reverse;
}
/* Keyframes
 ========================================================================== */
/*
 * Fade
 */
@-webkit-keyframes uk-fade {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes uk-fade {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
/*
 * Scale up
 */
@-webkit-keyframes uk-scale-up {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.2);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@keyframes uk-scale-up {
  0% {
    opacity: 0;
    transform: scale(0.2);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
/*
 * Scale down
 */
@-webkit-keyframes uk-scale-down {
  0% {
    opacity: 0;
    -webkit-transform: scale(1.8);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@keyframes uk-scale-down {
  0% {
    opacity: 0;
    transform: scale(1.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
/*
 * Slide top
 */
@-webkit-keyframes uk-slide-top {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@keyframes uk-slide-top {
  0% {
    opacity: 0;
    transform: translateY(-100%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
/*
 * Slide bottom
 */
@-webkit-keyframes uk-slide-bottom {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@keyframes uk-slide-bottom {
  0% {
    opacity: 0;
    transform: translateY(100%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
/*
 * Slide left
 */
@-webkit-keyframes uk-slide-left {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}
@keyframes uk-slide-left {
  0% {
    opacity: 0;
    transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
/*
 * Slide right
 */
@-webkit-keyframes uk-slide-right {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}
@keyframes uk-slide-right {
  0% {
    opacity: 0;
    transform: translateX(100%);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
/*
 * Shake
 */
@-webkit-keyframes uk-shake {
  0%,
  100% {
    -webkit-transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-9px);
  }
  20% {
    -webkit-transform: translateX(8px);
  }
  30% {
    -webkit-transform: translateX(-7px);
  }
  40% {
    -webkit-transform: translateX(6px);
  }
  50% {
    -webkit-transform: translateX(-5px);
  }
  60% {
    -webkit-transform: translateX(4px);
  }
  70% {
    -webkit-transform: translateX(-3px);
  }
  80% {
    -webkit-transform: translateX(2px);
  }
  90% {
    -webkit-transform: translateX(-1px);
  }
}
@keyframes uk-shake {
  0%,
  100% {
    transform: translateX(0);
  }
  10% {
    transform: translateX(-9px);
  }
  20% {
    transform: translateX(8px);
  }
  30% {
    transform: translateX(-7px);
  }
  40% {
    transform: translateX(6px);
  }
  50% {
    transform: translateX(-5px);
  }
  60% {
    transform: translateX(4px);
  }
  70% {
    transform: translateX(-3px);
  }
  80% {
    transform: translateX(2px);
  }
  90% {
    transform: translateX(-1px);
  }
}
/*
 * Slide top fixed
 */
@-webkit-keyframes uk-slide-top-fixed {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-10px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@keyframes uk-slide-top-fixed {
  0% {
    opacity: 0;
    transform: translateY(-10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
/*
 * Slide bottom fixed
 */
@-webkit-keyframes uk-slide-bottom-fixed {
  0% {
    opacity: 0;
    -webkit-transform: translateY(10px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@keyframes uk-slide-bottom-fixed {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
/*
 * Spin
 */
@-webkit-keyframes uk-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
  }
}
@keyframes uk-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}
/* ========================================================================
   Component: Dropdown
 ========================================================================== */
/*
 * 1. Hide by default
 * 2. Set position
 * 3. Box-sizing is needed for `uk-dropdown-justify`
 * 4. Set style
 * 5. Reset button group whitespace hack
 */
.uk-dropdown {
  /* 1 */
  display: none;
  /* 2 */
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1020;
  /* 3 */
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  /* 4 */
  width: 220px;
  margin-top: 5px;
  padding: 15px;
  background: #f5f5f5;
  color: #444444;
  /* 5 */
  font-size: 1rem;
  vertical-align: top;
}
/*
 * 1. Show dropdown
 * 2. Set animation
 * 3. Needed for scale animation
 */
.uk-open > .uk-dropdown {
  /* 1 */
  display: block;
  /* 2 */
  -webkit-animation: uk-fade 0.2s ease-in-out;
  animation: uk-fade 0.2s ease-in-out;
  /* 3 */
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
}
/* Alignment modifiers
 ========================================================================== */
/*
 * Modifier `uk-dropdown-flip`
 */
.uk-dropdown-flip {
  left: auto;
  right: 0;
}
/*
 * Modifier `uk-dropdown-up`
 */
.uk-dropdown-up {
  top: auto;
  bottom: 100%;
  margin-top: auto;
  margin-bottom: 5px;
}
/* Nav in dropdown
 ========================================================================== */
.uk-dropdown .uk-nav {
  margin: 0 -15px;
}
/* Grid and panel in dropdown
 ========================================================================== */
/*
* Vertical gutter
*/
/*
 * Grid
 * Higher specificity to override large gutter
 */
.uk-grid .uk-dropdown-grid + .uk-dropdown-grid {
  margin-top: 15px;
}
/* Panels */
.uk-dropdown-grid > [class*='uk-width-'] > .uk-panel + .uk-panel {
  margin-top: 15px;
}
/* Tablet and bigger */
@media (min-width: 768px) {
  /*
     * Horizontal gutter
     */
  .uk-dropdown:not(.uk-dropdown-stack) > .uk-dropdown-grid {
    margin-left: -15px;
    margin-right: -15px;
  }
  .uk-dropdown:not(.uk-dropdown-stack) > .uk-dropdown-grid > [class*='uk-width-'] {
    padding-left: 15px;
    padding-right: 15px;
  }
  /*
     * Column divider
     */
  .uk-dropdown:not(.uk-dropdown-stack) > .uk-dropdown-grid > [class*='uk-width-']:nth-child(n+2) {
    border-left: 1px solid #dddddd;
  }
  /*
     * Width multiplier for dropdown columns
     */
  .uk-dropdown-width-2:not(.uk-dropdown-stack) {
    width: 440px;
  }
  .uk-dropdown-width-3:not(.uk-dropdown-stack) {
    width: 660px;
  }
  .uk-dropdown-width-4:not(.uk-dropdown-stack) {
    width: 880px;
  }
  .uk-dropdown-width-5:not(.uk-dropdown-stack) {
    width: 1100px;
  }
}
/* Phone landscape and smaller */
@media (max-width: 767px) {
  /*
     * Stack columns and take full width
     */
  .uk-dropdown-grid > [class*='uk-width-'] {
    width: 100%;
  }
  /*
     * Vertical gutter
     */
  .uk-dropdown-grid > [class*='uk-width-']:nth-child(n+2) {
    margin-top: 15px;
  }
}
/*
* Stack grid columns
*/
.uk-dropdown-stack > .uk-dropdown-grid > [class*='uk-width-'] {
  width: 100%;
}
.uk-dropdown-stack > .uk-dropdown-grid > [class*='uk-width-']:nth-child(n+2) {
  margin-top: 15px;
}
/* Modifier `uk-dropdown-small`
 ========================================================================== */
/*
 * Set min-width and text expands dropdown if needed
 */
.uk-dropdown-small {
  min-width: 150px;
  width: auto;
  padding: 5px;
  white-space: nowrap;
}
/*
 * Nav in dropdown
 */
.uk-dropdown-small .uk-nav {
  margin: 0 -5px;
}
/* Modifier: `uk-dropdown-navbar`
 ========================================================================== */
.uk-dropdown-navbar {
  margin-top: 0;
  background: #f5f5f5;
  color: #444444;
}
.uk-open > .uk-dropdown-navbar {
  -webkit-animation: uk-slide-top-fixed 0.2s ease-in-out;
  animation: uk-slide-top-fixed 0.2s ease-in-out;
}
/* Modifier `uk-dropdown-scrollable`
 ========================================================================== */
/*
 * Usefull for long lists
 */
.uk-dropdown-scrollable {
  overflow-y: auto;
  height: 200px;
}
/* ========================================================================
   Component: Modal
 ========================================================================== */
/*
 * This is the modal overlay and modal dialog container
 * 1. Hide by default
 * 2. Set fixed position
 * 3. Allow scrolling for the modal dialog
 * 4. Mask the background page
 * 5. Fade-in transition
 * 6. Fix transition in Webkit
 */
.uk-modal {
  /* 1 */
  display: none;
  /* 2 */
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1010;
  /* 3 */
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  /* 4 */
  background: rgba(0, 0, 0, 0.6);
  /* 5 */
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
  /* 6 */
  -webkit-transform: translateZ(0);
}
/*
 * Open state
 */
.uk-modal.uk-open {
  opacity: 1;
}
/*
 * Prevents duplicated scrollbar caused by 4.
 */
.uk-modal-page,
.uk-modal-page body {
  overflow: hidden;
}
/* Sub-object: `uk-modal-dialog`
 ========================================================================== */
/*
 * 1. Create position context for `uk-modal-dialog-frameless`
 * 2. Set box sizing
 * 3. Set style
 * 4. Slide-in transition
 */
.uk-modal-dialog {
  /* 1 */
  position: relative;
  /* 2 */
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 50px auto;
  padding: 20px;
  width: 600px;
  max-width: 100%;
  max-width: calc(100% - 20px);
  /* 3 */
  background: #ffffff;
  /* 4 */
  opacity: 0;
  -webkit-transform: translateY(-100px);
  transform: translateY(-100px);
  -webkit-transition: opacity 0.3s linear, -webkit-transform 0.3s ease-out;
  transition: opacity 0.3s linear, transform 0.3s ease-out;
}
/* Phone landscape and smaller */
@media (max-width: 767px) {
  /*
     * Fit in small screen
     */
  .uk-modal-dialog {
    width: auto;
    margin: 10px;
  }
}
/*
 * Open state
 */
.uk-open .uk-modal-dialog {
  /* 4 */
  opacity: 1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
/*
 * Remove margin from the last-child
 */
.uk-modal-dialog > :last-child {
  margin-bottom: 0;
}
/* Close in modal
 ========================================================================== */
.uk-modal-dialog > .uk-close:first-child {
  margin: -10px -10px 0 0;
  float: right;
}
/*
 * Remove margin from adjacent element
 */
.uk-modal-dialog > .uk-close:first-child + * {
  margin-top: 0;
}
/* Modifier: `uk-modal-dialog-frameless`
 ========================================================================== */
.uk-modal-dialog-frameless {
  padding: 0;
}
/*
 * Close in modal
 */
.uk-modal-dialog-frameless > .uk-close:first-child {
  position: absolute;
  top: -12px;
  right: -12px;
  margin: 0;
  float: none;
}
/* Phone landscape and smaller */
@media (max-width: 767px) {
  .uk-modal-dialog-frameless > .uk-close:first-child {
    top: -7px;
    right: -7px;
  }
}
/* Modifier: `uk-modal-dialog-large`
 ========================================================================== */
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-modal-dialog-large {
    width: 930px;
  }
}
/* Large screen and bigger */
@media (min-width: 1220px) {
  .uk-modal-dialog-large {
    width: 1130px;
  }
}
/* ========================================================================
   Component: Off-canvas
 ========================================================================== */
/*
 * This is the offcanvas overlay and bar container
 * 1. Hide by default
 * 2. Set fixed position
 * 3. Mask the background page
 */
.uk-offcanvas {
  /* 1 */
  display: none;
  /* 2 */
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1000;
  /* 3 */
  background: rgba(0, 0, 0, 0.1);
}
.uk-offcanvas.uk-active {
  display: block;
}
/* Sub-object `uk-offcanvas-page`
 ========================================================================== */
/*
 * Prepares the whole HTML page to slide-out
 * 1. Fix the main page and disallow scrolling
 * 2. Side-out transition
 */
.uk-offcanvas-page {
  /* 1 */
  position: fixed;
  /* 2 */
  -webkit-transition: margin-left 0.3s ease-in-out;
  transition: margin-left 0.3s ease-in-out;
}
/* Sub-object `uk-offcanvas-bar`
 ========================================================================== */
/*
 * This is the offcanvas bar
 * 1. Set fixed position
 * 2. Size and style
 * 3. Allow scrolling
 * 4. Side-out transition
 */
.uk-offcanvas-bar {
  /* 1 */
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  z-index: 1001;
  /* 2 */
  width: 270px;
  max-width: 100%;
  background: #333333;
  /* 3 */
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  /* 4 */
  -webkit-transition: -webkit-transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
}
.uk-offcanvas.uk-active .uk-offcanvas-bar.uk-offcanvas-bar-show {
  -webkit-transform: translateX(0%);
  transform: translateX(0%);
}
/* Modifier `uk-offcanvas-bar-flip`
 ========================================================================== */
.uk-offcanvas-bar-flip {
  left: auto;
  right: 0;
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}
/* Panel in offcanvas
 ========================================================================== */
.uk-offcanvas .uk-panel {
  margin: 20px 15px;
  color: #777777;
}
.uk-offcanvas .uk-panel-title {
  color: #cccccc;
}
.uk-offcanvas .uk-panel a:not([class]) {
  color: #cccccc;
}
.uk-offcanvas .uk-panel a:not([class]):hover {
  color: #ffffff;
}
/* ========================================================================
   Component: Switcher
 ========================================================================== */
.uk-switcher {
  margin: 0;
  padding: 0;
  list-style: none;
}
/*
 * Items
 */
.uk-switcher > *:not(.uk-active) {
  display: none;
}
/* ========================================================================
   Component: Tooltip
 ========================================================================== */
/*
 * 1. Hide by default
 * 2. Set fixed position
 * 3. Set dimensions
 * 4. Set style
 */
.uk-tooltip {
  /* 1 */
  display: none;
  /* 2 */
  position: absolute;
  z-index: 1030;
  /* 3 */
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  max-width: 200px;
  padding: 5px 8px;
  /* 4 */
  background: #333333;
  color: rgba(255, 255, 255, 0.7);
  font-size: 12px;
  line-height: 18px;
  text-align: center;
}
/* Triangle
 ========================================================================== */
/*
 * 1. Dashed is less antialised than solid
 */
.uk-tooltip:after {
  content: "";
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  /* 1 */
  border: 5px dashed #333333;
}
/* Direction modifiers
 ========================================================================== */
/*
 * Top
 */
.uk-tooltip-top:after,
.uk-tooltip-top-left:after,
.uk-tooltip-top-right:after {
  bottom: -5px;
  border-top-style: solid;
  border-bottom: none;
  border-left-color: transparent;
  border-right-color: transparent;
  border-top-color: #333333;
}
/*
 * Bottom
 */
.uk-tooltip-bottom:after,
.uk-tooltip-bottom-left:after,
.uk-tooltip-bottom-right:after {
  top: -5px;
  border-bottom-style: solid;
  border-top: none;
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-color: #333333;
}
/*
 * Top/Bottom center
 */
.uk-tooltip-top:after,
.uk-tooltip-bottom:after {
  left: 50%;
  margin-left: -5px;
}
/*
 * Top/Bottom left
 */
.uk-tooltip-top-left:after,
.uk-tooltip-bottom-left:after {
  left: 10px;
}
/*
 * Top/Bottom right
 */
.uk-tooltip-top-right:after,
.uk-tooltip-bottom-right:after {
  right: 10px;
}
/*
 * Left
 */
.uk-tooltip-left:after {
  right: -5px;
  top: 50%;
  margin-top: -5px;
  border-left-style: solid;
  border-right: none;
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-left-color: #333333;
}
/*
 * Right
 */
.uk-tooltip-right:after {
  left: -5px;
  top: 50%;
  margin-top: -5px;
  border-right-style: solid;
  border-left: none;
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-right-color: #333333;
}
/* ========================================================================
   Component: Text
 ========================================================================== */
/* Size modifiers
 ========================================================================== */
.uk-text-small {
  font-size: 11px;
  line-height: 16px;
}
.uk-text-large {
  font-size: 18px;
  line-height: 24px;
  font-weight: normal;
}
/* Weight modifiers
 ========================================================================== */
.uk-text-bold {
  font-weight: bold;
}
/* Color modifiers
 ========================================================================== */
.uk-text-muted {
  color: #999999 !important;
}
.uk-text-primary {
  color: #2d7091 !important;
}
.uk-text-success {
  color: #659f13 !important;
}
.uk-text-warning {
  color: #e28327 !important;
}
.uk-text-danger {
  color: #d85030 !important;
}
/* Alignment modifiers
 ========================================================================== */
.uk-text-left {
  text-align: left !important;
}
.uk-text-right {
  text-align: right !important;
}
.uk-text-center {
  text-align: center !important;
}
.uk-text-justify {
  text-align: justify !important;
}
.uk-text-top {
  vertical-align: top !important;
}
.uk-text-middle {
  vertical-align: middle !important;
}
.uk-text-bottom {
  vertical-align: bottom !important;
}
/* Only tablets portrait */
@media (max-width: 959px) {
  .uk-text-center-medium {
    text-align: center !important;
  }
}
/* Phone landscape and smaller */
@media (max-width: 767px) {
  .uk-text-center-small {
    text-align: center !important;
  }
}
/* Wrap modifiers
 ========================================================================== */
/*
 * Prevent text from wrapping onto multiple lines
 */
.uk-text-nowrap {
  white-space: nowrap;
}
/*
 * Prevent text from wrapping onto multiple lines, and truncate with an ellipsis
 */
.uk-text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
/*
 * Break strings if their length exceeds the width of their container
 */
.uk-text-break {
  word-wrap: break-word;
  -webkit-hyphens: auto;
  -ms-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
}
/* ========================================================================
   Component: Utility
 ========================================================================== */
/* Container
 ========================================================================== */
.uk-container {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  max-width: 980px;
  padding: 0 25px;
}
/* Large screen and bigger */
@media (min-width: 1220px) {
  .uk-container {
    max-width: 1200px;
    padding: 0 35px;
  }
}
/*
 * Micro clearfix
 */
.uk-container:before,
.uk-container:after {
  content: " ";
  display: table;
}
.uk-container:after {
  clear: both;
}
/*
 * Center container
 */
.uk-container-center {
  margin-left: auto;
  margin-right: auto;
}
/* Clearing
 ========================================================================== */
/*
 * Micro clearfix
 */
.uk-clearfix:before,
.uk-clearfix:after {
  content: " ";
  display: table;
}
.uk-clearfix:after {
  clear: both;
}
/*
 *  Create a new block formatting context
 */
.uk-nbfc {
  overflow: hidden;
}
.uk-nbfc-alt {
  display: table-cell;
  width: 10000px;
}
/* Alignment of block elements
 ========================================================================== */
/*
 * Float blocks
 * 1. Prevent content overflow on small devices
 */
.uk-float-left {
  float: left;
}
.uk-float-right {
  float: right;
}
/* 1 */
[class*='uk-float-'] {
  max-width: 100%;
}
/* Alignment of images and objects
 ========================================================================== */
/*
 * Alignment
 */
[class*='uk-align-'] {
  display: block;
  margin-bottom: 20px;
}
.uk-align-left {
  margin-right: 20px;
  float: left;
}
.uk-align-right {
  margin-left: 20px;
  float: right;
}
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-align-medium-left {
    margin-right: 20px;
    margin-bottom: 20px;
    float: left;
  }
  .uk-align-medium-right {
    margin-left: 20px;
    margin-bottom: 20px;
    float: right;
  }
}
.uk-align-center {
  margin-left: auto;
  margin-right: auto;
}
/* Vertical alignment
 ========================================================================== */
/*
 * Remove whitespace between child elements when using `inline-block`
 */
.uk-vertical-align {
  font-size: 0.001px;
}
/*
 *  The `uk-vertical-align` container needs a specific height
 */
.uk-vertical-align:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
/*
 * Sub-object which can have any height
 * 1. Reset whitespace hack
 */
.uk-vertical-align-middle,
.uk-vertical-align-bottom {
  display: inline-block;
  max-width: 100%;
  /* 1 */
  font-size: 1rem;
}
.uk-vertical-align-middle {
  vertical-align: middle;
}
.uk-vertical-align-bottom {
  vertical-align: bottom;
}
/*
 *  This helper class is very useful to extend the `html` and `body` element to the full height of the page.
 */
.uk-height-1-1 {
  height: 100%;
}
/* Responsive objects
 * Note: Images are already responsive by default, see Base component
 ========================================================================== */
/*
 * 1. Corrects max-width/max-height behavior if padding and border are used
 */
.uk-responsive-width,
.uk-responsive-height {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/*
 * Responsiveness: Sets a maximum width relative to the parent and auto scales the height
 */
.uk-responsive-width {
  max-width: 100%;
  height: auto;
}
/*
 * Responsiveness: Sets a maximum height relative to the parent and auto scales the width
 * Only works if the parent element has a fixed height.
 */
.uk-responsive-height {
  max-height: 100%;
  width: auto;
}
/* Margin
 ========================================================================== */
/*
 * Create a block with the same margin of a paragraph
 * Add margin if adjacent element
 */
.uk-margin {
  margin-bottom: 20px;
}
* + .uk-margin {
  margin-top: 20px;
}
.uk-margin-top {
  margin-top: 20px !important;
}
.uk-margin-bottom {
  margin-bottom: 20px !important;
}
.uk-margin-left {
  margin-left: 20px !important;
}
.uk-margin-right {
  margin-right: 20px !important;
}
/*
 * Larger margins
 */
.uk-margin-large {
  margin-bottom: 50px;
}
* + .uk-margin-large {
  margin-top: 50px;
}
.uk-margin-large-top {
  margin-top: 50px !important;
}
.uk-margin-large-bottom {
  margin-bottom: 50px !important;
}
.uk-margin-large-left {
  margin-left: 50px !important;
}
.uk-margin-large-right {
  margin-right: 50px !important;
}
/*
 * Smaller margins
 */
.uk-margin-small {
  margin-bottom: 5px;
}
* + .uk-margin-small {
  margin-top: 5px;
}
.uk-margin-small-top {
  margin-top: 5px !important;
}
.uk-margin-small-bottom {
  margin-bottom: 5px !important;
}
.uk-margin-small-left {
  margin-left: 5px !important;
}
.uk-margin-small-right {
  margin-right: 5px !important;
}
/*
 * Remove margins
 */
.uk-margin-remove {
  margin: 0 !important;
}
.uk-margin-top-remove {
  margin-top: 0 !important;
}
.uk-margin-bottom-remove {
  margin-bottom: 0 !important;
}
/* Border
 ========================================================================== */
.uk-border-circle {
  border-radius: 50%;
}
.uk-border-rounded {
  border-radius: 5px;
}
/* Headings
 ========================================================================== */
/* Tablet and bigger */
@media (min-width: 768px) {
  .uk-heading-large {
    font-size: 52px;
    line-height: 64px;
  }
}
/* Link
 ========================================================================== */
/*
 * Let links appear in default text color
 */
.uk-link-muted,
.uk-link-muted a {
  color: #444444;
}
.uk-link-muted:hover,
.uk-link-muted a:hover {
  color: #444444;
}
/*
 * Reset link style
 */
.uk-link-reset,
.uk-link-reset a,
.uk-link-reset:hover,
.uk-link-reset a:hover {
  color: inherit;
  text-decoration: none;
}
/* Scrollable
 ========================================================================== */
/*
 * Enable scrolling for preformatted text
 */
.uk-scrollable-text {
  height: 300px;
  overflow-y: scroll;
  -webkit-overflow-scrolling: touch;
  resize: both;
}
/*
 * Box with scrolling enabled
 */
.uk-scrollable-box {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  height: 170px;
  padding: 10px;
  border: 1px solid #dddddd;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  resize: both;
}
.uk-scrollable-box > :last-child {
  margin-bottom: 0;
}
/* Overflow
 ========================================================================== */
/*
 * Enable scrollbars if content is clipped
 */
.uk-overflow-container {
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}
.uk-overflow-container > :last-child {
  margin-bottom: 0;
}
/* Display
 ========================================================================== */
/*
 * Display
 */
.uk-display-block {
  display: block !important;
}
.uk-display-inline {
  display: inline !important;
}
.uk-display-inline-block {
  display: inline-block !important;
}
/*
 * Visibility
 * Avoids setting display to `block` so it works also with `inline-block` and `table`
 */
/* Desktop and bigger */
@media (min-width: 960px) {
  .uk-visible-small {
    display: none !important;
  }
  .uk-visible-medium {
    display: none !important;
  }
  .uk-hidden-large {
    display: none !important;
  }
}
/* Tablets portrait */
@media (min-width: 768px) and (max-width: 959px) {
  .uk-visible-small {
    display: none !important;
  }
  .uk-visible-large {
    display: none !important ;
  }
  .uk-hidden-medium {
    display: none !important;
  }
}
/* Phone landscape and smaller*/
@media (max-width: 767px) {
  .uk-visible-medium {
    display: none !important;
  }
  .uk-visible-large {
    display: none !important;
  }
  .uk-hidden-small {
    display: none !important;
  }
}
/* Remove from the flow and screen readers on any device */
.uk-hidden {
  display: none !important;
  visibility: hidden !important;
}
/* It's hidden, but still affects layout */
.uk-invisible {
  visibility: hidden !important;
}
/* Show on hover */
.uk-visible-hover:hover .uk-hidden,
.uk-visible-hover:hover .uk-invisible {
  display: block !important;
  visibility: visible !important;
}
.uk-visible-hover-inline:hover .uk-hidden,
.uk-visible-hover-inline:hover .uk-invisible {
  display: inline-block !important;
  visibility: visible !important;
}
/* ========================================================================
   Component: Print
 ========================================================================== */
@media print {
  * {
    background: transparent !important;
    color: black !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  @page {
    margin: 0.5cm;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
}
/* ========================================================================
   Component: Search
 ========================================================================== */
/*
 * 1. Create position context for dropdowns
 * 2. Needed for `form` element
 */
.uk-search {
  display: inline-block;
  /* 1 */
  position: relative;
  /* 2 */
  margin: 0;
}
/*
 * Icon
 */
.uk-search:before {
  content: "\f002";
  position: absolute;
  top: 0;
  left: 0;
  width: 30px;
  line-height: 30px;
  text-align: center;
  font-family: FontAwesome;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.2);
}
/* Sub-object `uk-search-field`
 ========================================================================== */
/*
 * 1. Needed to reset iOS `input[type="search"]` appearance
 */
.uk-search-field {
  width: 120px;
  height: 30px;
  padding: 0 30px;
  border: 1px solid rgba(0, 0, 0, 0);
  background: rgba(0, 0, 0, 0);
  color: #444444;
  -webkit-transition: all linear 0.2s;
  transition: all linear 0.2s;
  /* 1 */
  border-radius: 0;
}
/*
 * Needed to reset iOS `input[type="search"]` appearance
 * Higher specificity to override appearance set by normalize.less
 */
input.uk-search-field {
  -webkit-appearance: none;
}
/* Placeholder */
.uk-search-field:-ms-input-placeholder {
  color: #999999;
}
.uk-search-field::-moz-placeholder {
  color: #999999;
}
.uk-search-field::-webkit-input-placeholder {
  color: #999999;
}
/* Removes cancel button in IE10 */
.uk-search-field::-ms-clear {
  display: none;
}
/* Focus */
.uk-search-field:focus {
  outline: 0;
}
/* Focus + active */
.uk-search-field:focus,
.uk-search.uk-active .uk-search-field {
  width: 180px;
}
/* Sub-object `uk-search-close`
 ========================================================================== */
/*
 * 1. Required for `button` elements
 * 2. Needed for Safari
 */
.uk-search-close {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  width: 30px;
  line-height: 30px;
  text-align: center;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.2);
  /* 1. */
  padding: 0;
  border: 0;
  -webkit-appearance: none;
  /* 2. */
  background: transparent;
}
.uk-loading > .uk-search-close,
.uk-active > .uk-search-close {
  display: block;
}
/*
 * Icon
 */
.uk-search-close:after {
  display: block;
  content: "\f00d";
  font-family: FontAwesome;
}
/* Loading icon */
.uk-loading > .uk-search-close:after {
  content: "\f110";
  -webkit-animation: uk-spin 2s infinite linear;
  animation: uk-spin 2s infinite linear;
}
/* Dropdown modifier: `uk-dropdown-search`
 ========================================================================== */
.uk-dropdown-search {
  width: 300px;
  margin-top: 0;
  background: #f5f5f5;
  color: #444444;
}
.uk-open > .uk-dropdown-search {
  -webkit-animation: uk-slide-top-fixed 0.2s ease-in-out;
  animation: uk-slide-top-fixed 0.2s ease-in-out;
}
/*
 * Dependency `uk-navbar-flip`
 */
.uk-navbar-flip .uk-dropdown-search {
  margin-top: 5px;
  margin-right: -15px;
}
/* Nav modifier `uk-nav-search`
 ========================================================================== */
/*
 * Items
 */
.uk-nav-search > li > a {
  color: #444444;
}
/*
 * Active
 * 1. Remove default focus style
 */
.uk-nav-search > li.uk-active > a {
  background: #00a8e6;
  color: #ffffff;
  /* 1 */
  outline: none;
}
/*
 * Sub-object: `uk-nav-header`
 */
.uk-nav-search .uk-nav-header {
  color: #999999;
}
/*
 * Sub-object: `uk-nav-divider`
 */
.uk-nav-search .uk-nav-divider {
  border-top: 1px solid #dddddd;
}
/*
 * Nested items
 */
.uk-nav-search ul a {
  color: #1fa2d6;
}
.uk-nav-search ul a:hover {
  color: #0074a2;
}
/* Search in offcanvas
 ========================================================================== */
.uk-offcanvas .uk-search {
  display: block;
  margin: 20px 15px;
}
.uk-offcanvas .uk-search:before {
  color: #777777;
}
.uk-offcanvas .uk-search-field {
  width: 100%;
  border-color: rgba(0, 0, 0, 0);
  background: #1a1a1a;
  color: #cccccc;
}
.uk-offcanvas .uk-search-field:-ms-input-placeholder {
  color: #777777;
}
.uk-offcanvas .uk-search-field::-moz-placeholder {
  color: #777777;
}
.uk-offcanvas .uk-search-field::-webkit-input-placeholder {
  color: #777777;
}
/* ========================================================================
   Warp theme
 ========================================================================== */
/* Layout
 ========================================================================== */
/*
 * Force vertical scrollbar
 */
html {
  overflow-y: scroll;
}
/*
 * Blocks
 */
.tm-toolbar,
.tm-headerbar,
.tm-navbar,
.tm-footer {
  margin-top: 25px;
  margin-bottom: 25px;
}
/* Only large screens */
@media (min-width: 1220px) {
  .tm-headerbar,
  .tm-navbar,
  .tm-footer {
    margin-top: 35px;
    margin-bottom: 35px;
  }
}
/* Only phones */
@media (max-width: 767px) {
  .tm-navbar {
    margin: 0 -25px 25px -25px;
    border-width: 0 0 1px 0;
  }
  .tm-logo-small:hover {
    text-decoration: none;
  }
  .tm-navbar:not(.uk-navbar-attached) {
    border-radius: 0;
  }
}
/*
 * Logo small
 * Remove whitespace caused by vertical centering to prevent logo wrapping into the next line
 */
.tm-logo-small {
  letter-spacing: -0.31em;
}
/*
 * Toolbar
 */
.tm-toolbar .uk-float-left .uk-panel {
  margin: 0 25px 0 0;
  float: left;
}
.tm-toolbar .uk-float-right .uk-panel {
  margin: 0 0 0 25px;
  float: right;
}
/*
 * Headerbar
 */
.tm-headerbar .tm-logo {
  float: left;
}
.tm-headerbar .uk-panel {
  max-width: 300px;
  margin-right: 0;
  float: right;
}
/*
 * Middle
 */
.tm-main > :nth-child(n+2) {
  margin-top: 25px;
}
.tm-content > :last-child {
  margin-bottom: 0;
}
/*
 * Footer
 */
.tm-footer {
  position: relative;
  text-align: center;
}
.tm-footer .uk-panel + .uk-panel {
  margin-top: 25px;
}
/*
 * To-top scroller
 */
.tm-totop-scroller {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1000;
  width: 20px;
  height: 20px;
  line-height: 20px;
  font-size: 14px;
  color: #444444;
  text-align: center;
  -webkit-transition: all linear 0.05s;
  transition: all linear 0.05s;
}
.tm-totop-scroller:after {
  content: "\f077";
  font-family: "FontAwesome";
}
/*
 * Hover
 * 1. Apply hover style also to focus state
 * 2. Remove default focus style
 */
.tm-totop-scroller:hover,
.tm-totop-scroller:focus {
  /* 1 */
  color: #777777;
  font-size: 16px;
  outline: none;
  /* 2 */
  text-decoration: none;
}
/* Active */
.tm-totop-scroller:active {
  color: #111111;
  font-size: 11px;
}
/* Blog
 ========================================================================== */
/*
 * Leading article
 * Joomla only
 */
.tm-leading-article .uk-article:last-child {
  padding-bottom: 25px;
  border-bottom: 1px solid #dddddd;
}
/* Error
 ========================================================================== */
.tm-error-icon {
  font-size: 250px;
}
.tm-error-headline {
  font-size: 100px;
}
/* Offline
 ========================================================================== */
.tm-offline {
  width: 300px;
}
/* Socialbuttons
 ========================================================================== */
.tm-socialbuttons > div {
  margin-right: 10px;
  float: left;
}
/* WordPress only
 ========================================================================== */
.alignleft {
  display: block;
  margin-right: 20px;
  float: left;
}
.alignright {
  display: block;
  margin-left: 20px;
  float: right;
}
.aligncenter {
  display: block;
  margin-left: auto;
  margin-right: auto;
}";}