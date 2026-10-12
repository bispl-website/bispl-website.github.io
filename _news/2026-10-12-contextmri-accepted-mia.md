---
layout: post
title: "ContextMRI Accepted to Medical Image Analysis"
date: 2026-10-12 00:00:00
inline: false
---

Congratulations! **[ContextMRI: Enhancing Compressed Sensing MRI through Metadata Conditioning](https://arxiv.org/abs/2501.04284)** --- Hyungjin Chung, Dohun Lee, Zihui Wu, Byung-Hoon Kim, Katherine L. Bouman and Jong Chul Ye --- has been accepted for publication in *Medical Image Analysis*.

Compressed sensing MRI reconstructs an image from fewer k-space measurements than it needs, so everything depends on the strength of the prior. Diffusion priors have been the recent answer, but they have been trained and sampled as if a scan arrived with nothing attached to it --- discarding the patient demographics, imaging parameters and slice-specific information that sit in the metadata of every clinical acquisition and that carry real cues about the anatomy and the protocol.

ContextMRI puts that information back into the problem. A pixel-space diffusion model is trained directly on minimally processed, complex-valued MRI; at inference the metadata is turned into a structured text prompt and fed to the model as CLIP text embeddings, conditioning the prior on what is already known about the scan. The gains hold consistently across datasets, acceleration factors and undersampling patterns.

[Code](https://github.com/DoHunLee1/ContextMRI) is available.
