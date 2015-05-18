This is different approach to a project I have been working on getting Node and WordPress to talk to each other. Instead of encapsulating the Node app in WordPress, this is the other way around: WordPress instance in a Node app (though both hand a dev off to WP; I haven't figured out if it is possible to do the reverse;).

This is a responsive web application in Gulp.js running Node.js with SASS Compass, a Bootstrap-SASS selective build, Browserify, Susy, Breakpoint and GSAP TweenMax libraries. I am encapulating a WordPress instance to a) have access to certain plugins such as Artful.ly, and b) use as a CMS (because of client preference). This will be a good exercize in protection from global variables. (I already have some shinanigans with scope). 

I think the next stage in developing this type of application lies in bringing Node forward into deployment, using WP-API. My preference is in replacing WP altogether. It is interesting to think that this approach may be backend agnostic. Or to use Ruby on Rails, or Node end-to-end on MEAN or Meteor. 

I will be posting those versions once they are reasonably presentable.

