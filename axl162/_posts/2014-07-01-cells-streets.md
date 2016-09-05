---
category: publications
layout: publication
title: "From Cells to Streets: Estimating Mobile Paths with Cellular-Side Data"
authors: ["Ilias Leontiadis", alima, "Haewoon Kwak", "Rade Stanojevic",
"David Wetherall", "Konstantina Papagiannaki"]
pubinfo: In Proceedings of the 10th International Conference on emerging Networking EXperiments and Technologies (CoNEXT 2014).
pubinfoshort: CoNEXT 2014
paper: http://conferences2.sigcomm.org/co-next/2014/CoNEXT_papers/p121.pdf
---
Through their normal operation, cellular networks are a repository of
continuous location information from its subscribed devices. Such
information, however, comes at a coarse granularity both in terms of
space, as well as time. For otherwise inactive devices, location
information can be obtained at the granularity of the associated
cellular sector, and at infrequent points in time, that are sensitive to
the structure of the network itself, and the level of mobility of the
device. In this paper, we are asking the question of whether such sparse
information can help to identify the paths followed by mobile
connected devices throughout the day. If such a task is possible, then
we would not only enable continuous mobility path estimation for
smartphones, but also for the millions of connected devices foreseen
until 2020.
The challenge we face is that cellular data has one to two orders of
magnitude less spatial and temporal resolution than typical GPS traces.
Our contribution is to devise path segmentation, de-noising, and
inference procedures to estimate the device stationary location, as well
as its mobility path between stationary positions. We call our technique
Cell\*. We complement the lack of spatio-temporal granularity with
information on the cellular network topology, and GIS (Geographic
Information System).
We collect more than 3,000 mobility trajectories over 8 months and show
that Cell\* achieves a median error of 230m for the stationary location
estimation, while mobility paths are estimated with a median accuracy of
70m. We show that mobility path accuracy improves with its length and
speed, and counter to our intuition, accuracy appears to improve in
suburban areas. Cell\* is the first technology, we are aware of, that
allows location services for the new generation of connected mobile
devices, that may feature no GPS, due to cost, size, or battery
constraints.
