---
layout: post
title:  "Responsive Web Design - Part 1: Requirements"
date:   2014-01-04 04:58:00
edited: 
author: Anthony Chuang
categories: Site Software Blog
tags: responsive web design, rwd, software, web development, design, css, html, user interface, UI
---

One of the most valuable things I learned when working as a Product Manager at NexJ Systems last year was Responsive Web Design.  As part of my work term report for my co-op term, I did a lot of research on Responsive Web Design (from here on, referred to as "RWD").  While the paper itself is confidential to the company, some of the concepts surrounding RWD is very public and therefore are things I can write about here.

*__In a nutshell, Responsive Web Design is about designing web interfaces that automatically adjust itself to fit different screen sizes.__*
<!--excerpt-->
This is important because your website might be viewed on anything ranging from a smartphone, tablet, laptop, up to a 30" desktop computer screen, and you want your website to look good in ALL of them.  Instead of designing a mobile site that looks good on a 3.5" phone and looks cartoonish on a 7" tablet, and then a desktop site that looks good on an iPad but looks empty on a desktop monitor, RWD encourages you to design _ONE_ website that molds itself to adapt to different screen sizes.

A good example of a RWD site is [Robot or Not] (http://responsivewebdesign.com/robot/).  Try viewing it on your desktop/laptop, and then resize your browser's WIDTH from your full screen to the smallest possible.  Notice how elements on the page move, resize, or disappear completely when the browser is shrunk down.  This simulates the same site being viewed on a desktop, tablet, or smartphone!

This almost magical feat is accomplished by using [CSS Media Queries](http://www.w3.org/TR/css3-mediaqueries/).  Instead of reporting its physical pixel width, the browser reports a pixel width based on the size of the screen, which lets web designers target their websites to differently-sized devices easier.  Custom CSS can be written for all supported sizes and orientations, which re-arrange page elements depending on the parameters given.

Why am I mentioning RWD now, before I even started on the layout of this site? This is extremely important because RWD is something that needs to be considered while DESIGNING your website, and not implemented as an afterthought.  RWD websites need to be built that way from the ground up!

After digging around a bit to determine the common viewport sizes (the number browsers report to websites) and thinking about different devices I want to target, I decided to split it up this way while designing my site:

__Devices supported__ (from smallest to largest):

1.	Smartphone (regular, large)
2.	Small tablet (7" to 8")
3.	Large tablet (aka. iPad, 10" tablets)
4.	Laptop/Desktop computer

Then I broke the list down to supported VIEWS, figured out a rough pixel width range that corresponds to each, and found examples of what would fall under each range):

<table class="blog_dataTable">
	<tr>
		<th> Supported View </th>
		<th> Width Range </th>
		<th> Examples (P: portrait, L: landscape) </th>
	</tr>
	<tr>
		<td> Smartphone (portrait) </td>
		<td> < 600px </td>
		<td> All iPhone (P: 320, L: 480-568) <br>
			 Samsung Galaxy S4 (P: 360) <br>
			 Nexus 4 (P: 384, L: 598) <br>
			 Nexus 5 (P: 360, L: 598) <br>
			 All Nokia Lumia (P: 320, L: 480) <br>
			 Samsung Galaxy Note 2, 3 (P: 360)
		</td>		
	</tr>
	<tr>
		<td> Large Smartphone (landscape) <br>
			 Small tablet (portrait)</td>
		<td> 600px - 719px </td>
		<td> Galaxy Note 2, 3 (L: 640) <br>
			 HTC One (S, XL, etc) (L: 640) <br>
			 Nexus 7 (P: 600-603, depending on OS) <br>
			 Samsung Galaxy Note 8.0 (P: 601)
		</td>
	</tr>
	<tr>
		<td> Small tablet (landscape) <br>
		Large tablet (portrait) </td>
		<td> 720px - 1000px</td>
		<td> All iPad (P: 768) <br>
			 iPad Mini (P: 768) <br>
			 Samsung Galaxy Note 10 (P: 800) <br>
			 Samsung Galaxy Note 8.0 (L: 962) <br>
			 Nexus 10 (P: 800) <br>
			 Microsoft Surface (P: 768) <br>
			 Microsoft Surface Pro (P: 720)
		</td>
	</tr>
	<tr>
		<td> Large tablet (Landscape) <br>
			 Desktop/Laptop </td>
		<td> 1001px - 1439px </td>
		<td> All iPad (L: 1024) <br>
			 iPad Mini (L: 1024) <br>
			 Galaxy Note 10 (P: 1280) <br>
			 Nexus 10 (L: 1280) <br>
			 Microsoft Surface (L: 1366) <br>
			 Microsoft Surface Pro (L: 1280) <br>
		</td>
	</tr>
	<tr>
		<td> Desktop Super Wide </td>
		<td> >= 1440px </td>
		<td> Desktop monitors 1440x900 or higher </td>
	</tr>
</table>

Some Notes:

- All data collected from [ViewPort Sizes](http://viewportsizes.com/) and not verified on my own :P
- Desktop Super Wide is useful for large, high resolution desktop monitors that would otherwise look empty if grouped with large tablets and laptops.
- Interesting outliers:
	- iPad Mini is 7.9", but reports itself as a 10" tablet - a headache for web devs
	- HTC One series phones are the same screen size (5") as the Nexus 5 and Galaxy S4, but reports itself much bigger in landscape mode (640px).  This puts it under large phones and tablets
	- According to the source, Microsoft's Surface reports itself bigger than the Surface Pro.  I wonder why...

Now that I have all of this data, I can start designing my site to fit the 5 size ranges I'm supporting!  At the time of writing, I've only started tinkering.  Try resizing your browser on this page now, and notice the page width shifting.  Now check out my [About](/about) page and see the image shift relative to the text too!

If you want to find out more about RWD and how effectively design and build responsive websites, I strongly recommend the book [Responsive Web Design][1] by Ethan Marcotte.

Cheers!

[1]: http://www.amazon.com/Responsive-Design-Brief-People-Websites/dp/098444257X/