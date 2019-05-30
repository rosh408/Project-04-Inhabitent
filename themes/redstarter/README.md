# RED Starter

A WordPress starter theme for RED Academy students, forked from Underscores.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `redstarter-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).
# Project-04

## Personal Learnings

CSS: 
- replace repeated stylings with a variable to be more efficient when styling
- to avoid overnesting, this could result in a lot of confusion as to where your elements are.
- to be more efficient when styling pages that have the same structure (e.g. about page and home page has the same styling), this also requires styling both pages by targeting both their unique body classes
- adding comments to page-template.scss was super helpful due to the huge amount of css which helps keep track of where your stylings are being affected.

PHP:
- using built in wordpress methods such as get_template_directory_uri(), get_the_permalink() helped me visualize how they were working but seeing them work on my browser.
- Using the inhabitent_body_class_for_pages() in our extras php helped me better style the individual pages.
- copying and pasting the content from the template-parts folder into the php files gives better access to the files by making some changes.

JS:
- using toggleClass and IDs for the search on click event helped made the search toggle work. 

Git: 
- having a fair number of commits for a huge project like Inhabitent is essential.


