---
layout: post
title: "Sparse SPM Toolbox is now available for download. Please see our software pages."
date: 2015-10-01 12:00:00
inline: false
---

Our recent paper on functional connectivity fMRI: Sparse SPM

Recent studies of functional connectivity MR imaging have revealed that the default-mode network activity is disrupted in diseases such as Alzheimer's disease (AD). However, there is not yet a consensus on the preferred method for resting-state analysis. In our recent NeuroImage paper, rather than using the independency assumption, we present a new statistical parameter mapping (SPM)-type analysis method based on a sparse graph model where temporal dynamics at each voxel position are described as a sparse combination of global brain dynamics. In particular, a new concept of a spatially adaptive design matrix has been proposed to represent local connectivity that shares the same temporal dynamics. If we further assume that local network structures within a group are similar,
the estimation problem of global and local dynamics can be solved using sparse dictionary learning for the concatenated temporal data across subjects.

Interestingly, as shown in Fig 2, the sparse dictionary learning has very interesting implications in the context of fcMRI. In sparse dictionary learning, we alternatively applies the dictionary update step and sparse coding step. Such repeated applications of filtering and adaptive seed-based clustering procedures allow our method to take advantage of both the conventional seed-based approach and the ICA type of clustering approaches which makes the proposed algorithm very powerful.
