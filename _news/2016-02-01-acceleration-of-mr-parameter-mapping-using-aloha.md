---
layout: post
title: "Acceleration of MR Parameter Mapping Using ALOHA"
date: 2016-02-01 12:00:00
inline: false
---

- Dongwook Lee,, Kyong Hwan Jin, Eung Yeop Kim, Sung-Hong Park and Jong Chul Ye, "Acceleration of MR parameter mapping using annihilating filter-based low rank Hankel matrix (ALOHA)", Magnetic Resonance in Medicine (in press), 2016.

MR parameter mapping is one of clinically valuable MR imaging techniques. However, increased scan time makes it difficult for routine clinical use. This article aims at developing an accelerated MR parameter mapping technique using annihilating filter based low-rank Hankel matrix approach (ALOHA). When a dynamic sequence can be sparsified using spatial wavelet and temporal Fourier transform, this results in a rank-deficient Hankel structured matrix that is constructed using weighted k-t measurements. ALOHA then utilizes the low rank matrix completion algorithm combined with a multiscale pyramidal decomposition to estimate the missing k-space data. Spin-echo inversion recovery and multiecho spin echo pulse sequences for T1 and T2 mapping, respectively, were redesigned to perform undersampling along the phase encoding direction according to Gaussian distribution. The missing k-space is reconstructed using ALOHA. Then, the parameter maps were constructed using nonlinear regression. Experimental results confirmed that ALOHA outperformed the existing compressed sensing algorithms. Compared with the existing methods, the reconstruction errors appeared scattered throughout the entire images rather than exhibiting systematic distortion along edges and the parameter maps. Given that many diagnostic errors are caused by the systematic distortion of images, ALOHA may have a great potential for clinical applications.
