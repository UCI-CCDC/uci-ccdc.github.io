---
layout: post
title:  "Announcing our New Website"
date:   2019-08-03
excerpt: "Cyber's new website prepares us for a bright future"
image: "/images/newsite.jpg"
---
### Why the Change?

Our old website, though it worked, was growing harder and harder to maintain. Much
of the code was custom written CSS, HTML, and PHP, as indicated by a beginner developer's
work. Though I learned a lot from writing it, handing off an hard to maintain and
confusing web structure was not something I wanted to do.

As a board, we also realized the need to enhance our communication with both our
members and potential sponsors -- we need a way to write out what's on our mind without
taking hours to custom-code a brand new webpage.

In essence, the website needs to:

1. Enable agile communication
1. Promote the organization
1. Low-maintenance


### Decision Process
To tackle those three requirements, the team took a look at several popular web
content management systems: Drupal, Wordpress, and Jekyll. Though Drupal and
Wordpress' expanded feature set were tempting, Jekyll's ease of maintenance and
lack of Cybersecurity vulnerability were extremely tempting.

### Cybersecurity Analysis
As a Cybersecurity club, we keep an eye out for our own web services and
their own vulnerability to attack. Both Drupal and Wordpress utilize a full LAMP
stack, that ultimately means there are more points of failure. Specifically, Wordpress
and Drupal store their data in a database, which can be potentially broken into and
manipulated.

Jekll, however, stores all the data statically. This means that every time the
website is updated, the entire HTML source code is generated and stored. This also means
manipulating the website requires access to the hosting system, not just database
access. Jekyll fulfilled the feature set we needed, so we chose it!

### Migration Process
Our servers are hosted in an undisclosed location. As a part of the migration process, I
decided to do a routine system reformat and upgrade all the server software to patch for
any vulnerabilities missed by the previous system admin. Unfortunately due to physical constraints,
that also meant taking down the website for several days as I reformatted and patched the
system (although our analytics engines indicate a fairly small summertime impact).
Curious more about what a server migration takes? Come join [CCDC](/ccdc)!

I'm proud to introduce the new system, and hope it serves the club for many years
to come!

\- *Micah Raney \| 2018-19 Board Member*
