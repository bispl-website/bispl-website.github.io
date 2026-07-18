// get the ninja-keys element
const ninja = document.querySelector('ninja-keys');

// add the home and posts menu items
ninja.data = [{
    id: "nav-about",
    title: "About",
    section: "Navigation",
    handler: () => {
      window.location.href = "/";
    },
  },{id: "nav-news",
          title: "News",
          description: "",
          section: "Navigation",
          handler: () => {
            window.location.href = "/news/";
          },
        },{id: "nav-professor",
          title: "Professor",
          description: "",
          section: "Navigation",
          handler: () => {
            window.location.href = "/professor/";
          },
        },{id: "nav-people",
          title: "People",
          description: "Current members of BISPL @ KAIST AI.",
          section: "Navigation",
          handler: () => {
            window.location.href = "/people/";
          },
        },{id: "nav-publications",
          title: "Publications",
          description: "Publications by BISPL @ KAIST AI, in reverse chronological order",
          section: "Navigation",
          handler: () => {
            window.location.href = "/publications/";
          },
        },{id: "nav-hall-of-fame",
          title: "Hall of Fame",
          description: "BISPL annual awards, recognizing outstanding research and service since 2013.",
          section: "Navigation",
          handler: () => {
            window.location.href = "/awards/";
          },
        },{id: "nav-alumni",
          title: "Alumni",
          description: "Former BISPL members now leading in academia, industry, and medicine worldwide.",
          section: "Navigation",
          handler: () => {
            window.location.href = "/alumni/";
          },
        },{id: "news-5-ismrm-2-ohbm-4-isbi-papers-have-been-accepted",
          title: '5 ISMRM, 2 OHBM, 4 ISBI papers have been accepted',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-04-01-5-ismrm-papers-accepted/";
            },},{id: "news-two-ct-meeting-papers-have-been-accepted",
          title: 'Two CT meeting papers have been accepted',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-04-01-ct-meeting-paper-has-been-accepted/";
            },},{id: "news-our-2004-mission-statements",
          title: 'Our 2004 Mission Statements',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-04-01-bispl/";
            },},{id: "news-two-ohbm-posters-on-persistence-landscape-for-brain-connectivity-analysis",
          title: 'Two OHBM Posters on Persistence Landscape for Brain Connectivity Analysis',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-06-01-ohbm-papares-on-persistent-landscapes-for-brain-connectivity-analysis/";
            },},{id: "news-x-ray-ct-recon-summer-school-at-kaist-aug-26th-aug-27th-2014",
          title: 'X-ray CT Recon Summer School at KAIST, Aug. 26th-Aug 27th, 2014',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-07-01-x-ray-ct-recon-summer-school-at-kaist-aug-26th-aug-27th-2014/";
            },},{id: "news-our-recent-ieee-tmi-paper-quot-motion-adaptive-patch-based-low-rank-approach-for-compressed-sensing-cardiac-cine-mri-quot",
          title: 'Our Recent IEEE TMI Paper &amp;quot;Motion Adaptive Patch-Based Low-Rank Approach for Compressed Sensing...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-09-01-our-recent-ieee-tmi-paper-motion-adaptive-patch-based-low-rank-approac/";
            },},{id: "news-kaist-bioengineering-vision-2014",
          title: 'KAIST Bioengineering Vision 2014',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-11-01-kaist-bioengineering-vision-2014/";
            },},{id: "news-kitware-recognizes",
          title: 'Kitware recognizes...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-11-01-kitware-recognizes/";
            },},{id: "news-new-journal-quot-ieee-trans-on-computational-imaging-quot",
          title: 'New Journal &amp;quot;IEEE Trans. on Computational Imaging&amp;quot;',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-11-01-new-journal-ieee-trans-on-computational-imaging1/";
            },},{id: "news-ipiu-2015-image-processing-and-image-understanding-jeju-island",
          title: 'IPIU 2015 (Image Processing and Image Understanding) @ Jeju Island',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2014-12-01-ipiu-2005-image-processing-and-image-understanding-jeju-island/";
            },},{id: "news-impressionist-filters",
          title: 'Impressionist filters',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2015-01-01-impressionist-filters/";
            },},{id: "news-new-design-for-ipiu-2015",
          title: 'New design for IPIU 2015',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2015-01-01-new-design-for-ipiu-2015/";
            },},{id: "news-samsung-human-tech-award",
          title: 'Samsung Human Tech Award',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2015-02-01-samsung-human-tech-award/";
            },},{id: "news-two-aloha-presentations-at-isbi-2015",
          title: 'Two ALOHA presentations at ISBI 2015',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2015-04-01-two-aloha-presentations-at-isbi-2015/";
            },},{id: "news-annihilating-filter-based-low-rank-hankel-matrix-approach-for-image-inpainting",
          title: 'Annihilating Filter-based Low-Rank Hankel Matrix Approach for Image Inpainting',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2015-06-01-other-figures-from-our-latest-tip-paper-on-aloha-inpainting/";
            },},{id: "news-sparse-spm-toolbox-is-now-available-for-download-please-see-our-software-pages",
          title: 'Sparse SPM Toolbox is now available for download. Please see our software pages....',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2015-10-01-sparsity-dictionary-learning-spm-and-fcmri/";
            },},{id: "news-acceleration-of-mr-parameter-mapping-using-aloha",
          title: 'Acceleration of MR Parameter Mapping Using ALOHA',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2016-02-01-acceleration-of-mr-parameter-mapping-using-aloha/";
            },},{id: "news-best-student-paper-award-at-ieee-symp-biomedical-imaging-isbi-2016",
          title: 'Best Student Paper Award at IEEE Symp. Biomedical Imaging (ISBI 2016)',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2016-04-01-best-student-paper-award-at-ieee-symp-biomedical-imaging-isbi/";
            },},{id: "news-summer-school-for-bio-imaging-and-signal-processing-korea",
          title: 'Summer School for Bio Imaging and Signal Processing @ Korea',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2016-06-01-summer-school-for-bio-imaging-and-signal-processing-korea/";
            },},{id: "news-we-were-the-winners-of-quot-low-dose-ct-grand-challenge-quot-바이오영상신호처리-실험실-quot-저선량-ct-그랜드-챌린지-quot-국제-대회-1-2위-휩쓸어",
          title: 'We were the winners of &amp;quot;Low-Dose CT Grand Challenge&amp;quot; ! 바이오영상신호처리 실험실 &amp;quot;저선량...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2016-08-01-ct-low-dose-ct-grand-challenge-winners-ct-1-2/";
            },},{id: "news-happy-new-year-2017-from-bispl",
          title: 'Happy New Year 2017 from BISPL !',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2017-01-01-happy-new-year-2017-from-bispl/";
            },},{id: "news-job-announcements",
          title: 'Job Announcements',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2017-01-01-job-announcements/";
            },},{id: "news-ismrm-highlights-post",
          title: 'ISMRM Highlights Post',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2017-02-01-ismrm-highlights-post/";
            },},{id: "news-call-for-papers-quot-machine-learning-for-image-reconstruction-quot-in-ieee-trans-on-medical-imaging",
          title: 'Call for Papers, &amp;quot;Machine Learning for Image Reconstruction&amp;quot; in IEEE Trans. on Medical...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2017-03-01-call-for-paper-machine-learning-for-image-reconstruction-in-ieee-trans/";
            },},{id: "news-제3회-바이오영상신호처리-연구회-여름학교",
          title: '제3회 바이오영상신호처리 연구회 여름학교',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2017-06-01-3/";
            },},{id: "news-kaist-석학-초청강연-kaist-distinguished-lecture-series",
          title: 'KAIST 석학 초청강연 (KAIST Distinguished Lecture Series)',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2017-07-01-kaist-kaist-distinguished-lecture-series/";
            },},{id: "news-cvpr-workshop-ntire-super-resolution-challenge-3rd-place-award",
          title: 'CVPR Workshop NTIRE Super Resolution Challenge 3rd Place Award',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2017-08-01-cvpr-workshop-ntire-super-resolution-challenge-3rd-place-award/";
            },},{id: "news-deep-learning-reconstruction-from-9-view-dual-energy-ct-for-baggage-inspection",
          title: 'Deep Learning Reconstruction from 9-view Dual Energy CT for Baggage Inspection',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2018-01-01-deep-learning-reconstruction-from-9-view-dual-energy-ct-for-baggage-in/";
            },},{id: "news-congratulations-three-new-papers-on-deep-learning-based-image-reconstruction-will-appear-in-ieee-transactions",
          title: 'Congratulations ! Three new papers on deep learning-based image reconstruction will appear in...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2018-03-01-congratulations-three-new-papers-on-deep-learning-based-image-reconstr/";
            },},{id: "news-2018-ct-meeting-refresher-course-on-deep-learning-for-ct",
          title: '2018 CT Meeting Refresher Course on Deep Learning for CT',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2018-05-01-2018-ct-meeting-refresher-course-on-deep-learning-for-ct/";
            },},{id: "news-ieee-embs-international-summer-school-on-biomedical-imaging",
          title: 'IEEE EMBS International Summer School on Biomedical Imaging',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2018-06-01-ieee-embs-international-summer-school-on-biomedical-imaging/";
            },},{id: "news-our-deep-learning-paper-siam-journal-on-applied-mathematics",
          title: 'Our Deep Learning Paper @ SIAM Journal on Applied Mathematics',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2018-08-01-our-deep-learning-paper-siam-journal-on-applied-mathematics/";
            },},{id: "news-icmri-2019-plenary-speaker",
          title: 'ICMRI 2019 Plenary Speaker',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-02-01-icmri-2019-plenary-speaker/";
            },},{id: "news-tutorial-material-for-quot-deep-learning-for-biomedical-image-reconstruction-quot-at-the-2019-ieee-symposium-on-biomedical-imaging-isbi-venice",
          title: 'Tutorial Material for &amp;quot;Deep Learning for Biomedical Image Reconstruction &amp;quot; at the 2019...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-04-01-tutorial-material-for-deep-learning-for-biomedical-image-reconstructio/";
            },},{id: "news-deep-learning-roi-tomography-using-differentiated-backprojection-domain",
          title: 'Deep Learning ROI tomography using Differentiated Backprojection domain',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-05-01-deep-learning-roi-tomography-using-differentiated-backprojection-domai/";
            },},{id: "news-ismrm-plenary-talk-on-quot-machine-learning-in-medical-imaging-quot",
          title: 'ISMRM Plenary Talk on &amp;quot;Machine Learning in Medical Imaging&amp;quot;',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-05-01-ismrm-plenary-talk-on-machine-learning-for-medical-imaging/";
            },},{id: "news-cvpr-2019-best-paper-finalist",
          title: 'CVPR 2019 Best Paper Finalist',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-06-01-cvpr-2019-best-paper-finalist/";
            },},{id: "news-plenary-talk-at-2019-aip-conference-grenoble-france",
          title: 'Plenary Talk at 2019 AIP Conference, Grenoble, France',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-07-01-plenary-talk-at-2019-aip-conference-grenoble-france/";
            },},{id: "news-ieee-sym-on-biomedical-imaging-isbi-2020",
          title: 'IEEE Sym. on Biomedical Imaging (ISBI) 2020',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-10-01-ieee-sym-on-biomedical-imaging-isbi-2020/";
            },},{id: "news-ieee-fellow-class-of-2020",
          title: 'IEEE Fellow (Class of 2020)',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2019-12-01-prof-ye-is-elevated-to-ieee-fellow/";
            },},{id: "news-ieee-embs-distinguished-lecturer",
          title: 'IEEE EMBS Distinguished Lecturer',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2020-03-01-ieee-embs-distinguished-lecturer/";
            },},{id: "news-recent-review-article-at-nature-machine-intelligence-by-prof-ye",
          title: 'Recent Review Article at Nature Machine Intelligence by Prof. Ye',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2020-12-01-recent-review-article-at-nature-machine-intelligence/";
            },},{id: "news-nature-machine-intelligence-cover",
          title: 'Nature Machine Intelligence Cover',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2021-03-01-nature-machine-intelligence-cover/";
            },},{id: "news-upcoming-textbook-by-prof-ye-quot-geometry-of-deep-learning-quot-from-springer",
          title: 'Upcoming textbook by Prof. Ye: &amp;quot;Geometry of Deep Learning&amp;quot; from Springer',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2021-08-01-upcoming-textbook-by-prof-ye-geometry-of-deep-learning-from-springer/";
            },},{id: "news-three-papers-are-accepted-for-neurips-2021",
          title: 'Three papers are accepted for NeurIPS 2021!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2021-09-01-three-papers-are-accepted-for-neurips-2021/";
            },},{id: "news-quot-geometry-of-deep-learning-quot-by-prof-ye-made-it-to-bookauthority-39-s-best-new-signal-processing-books",
          title: '&amp;quot;Geometry of Deep Learning&amp;quot; by Prof. Ye made it to BookAuthority&amp;#39;s best new...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2022-01-01-geometry-of-deep-learning-by-prof-ye-made-it-to-bookauthoritys-best-ne/";
            },},{id: "news-bispl-39-s-new-home-graduate-school-of-ai",
          title: 'BISPL&amp;#39;s new home @ Graduate School of AI',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2022-02-01-relocation-of-bispl-to-graduate-school-of-ai/";
            },},{id: "news-five-papers-accepted-to-cvpr-2022",
          title: 'Five papers accepted to CVPR 2022!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2022-03-01-five-papers-are-accepted-at-cvpr-2022/";
            },},{id: "news-our-latest-deep-learning-paper-published-in-acs-nano-if-15-88",
          title: 'Our Latest Deep Learning Paper published in ACS Nano (IF=15.88)',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2022-06-01-our-deep-learning-paper-on-acs-nano-if1588/";
            },},{id: "news-two-papers-accepted-to-eccv-2022",
          title: 'Two papers accepted to ECCV 2022',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2022-07-01-two-papers-accepted-to-eccv-2022/";
            },},{id: "news-two-papers-accepted-to-neurips-2022",
          title: 'Two papers accepted to NeurIPS 2022',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2022-09-01-two-papers-accepted-to-neurips-2022/";
            },},{id: "news-recent-paper-in-nature-machine-intelligence",
          title: 'Recent Paper in Nature Machine Intelligence',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2022-11-01-recent-bispl-paper-on-nature-machine-intelligence/";
            },},{id: "news-three-papers-accepted-to-iclr-2023",
          title: 'Three papers accepted to ICLR 2023!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-01-01-three-papers-accepted-for-iclr-2023/";
            },},{id: "news-congraturations",
          title: 'Congraturations!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-03-01-congraturations/";
            },},{id: "news-three-papers-accepted-to-cvpr-2023",
          title: 'Three papers accepted to CVPR 2023!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-03-01-three-papers-accepted-to-cvpr-2023/";
            },},{id: "news-two-papers-accepted-to-icml-2023",
          title: 'Two papers accepted to ICML 2023!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-04-01-two-papers-accepted-to-icml-2023/";
            },},{id: "news-ieee-t-pami-paper-accepted",
          title: 'IEEE T-PAMI paper accepted!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-06-01-a-ieee-t-pami-paper-accepted/";
            },},{id: "news-keynote-speech-at-ipmi-2023-by-prof-ye",
          title: 'Keynote Speech at IPMI 2023 by Prof. Ye',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-06-01-keynote-speech-at-ipmi-2023-by-prof-ye/";
            },},{id: "news-two-papers-accepted-for-iccv-2023",
          title: 'Two papers accepted for ICCV 2023!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-07-01-two-papers-accepted-for-iccv-2024/";
            },},{id: "news-upcoming-book-by-prof-ye",
          title: 'Upcoming Book by Prof. Ye',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-07-01-upcoming-book-by-prof-ye/";
            },},{id: "news-two-papers-accepted-for-neurips-2023",
          title: 'Two papers accepted for NeurIPS 2023!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-09-01-two-papers-accepted-for-neurips-2023/";
            },},{id: "news-congratulations-bispl-continues-to-be-a-cradle-for-academia",
          title: 'Congratulations! BISPL continues to be a cradle for academia.',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-10-01-congratulations-bispl-continues-to-be-a-cradle-for-academia/";
            },},{id: "news-prof-ye-received-the-prestigious-korean-mathematics-award",
          title: 'Prof. Ye received the prestigious Korean mathematics award',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-11-01-prof-ye-received-the-prestigious-korean-mathematics-award/";
            },},{id: "news-two-papers-are-accepted-for-medical-image-analysis",
          title: 'Two papers are accepted for Medical Image Analysis.',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-11-01-two-papers-are-accepted-for-medical-image-analysis/";
            },},{id: "news-congraturations-gyutaek-39-s-paper-is-accepted-for-ieee-tci",
          title: 'Congraturations! Gyutaek&amp;#39;s paper is accepted for IEEE TCI.',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-12-01-congraturations-gyutaeks-paper-is-accepted-for-ieee-tci/";
            },},{id: "news-jaehyung-39-s-paper-is-accepted-by-ieee-journal-of-biomedical-amp-health-informatic",
          title: 'Jaehyung&amp;#39;s paper is accepted by IEEE Journal of Biomedical &amp;amp; Health Informatic',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-12-01-jaehyungs-paper-is-accepted-by-ieee-journal-of-biomedical-health-infor/";
            },},{id: "news-prof-ye-is-selected-as-the-fellow-of-korean-academy-of-science-and-technology-한림원",
          title: 'Prof. Ye is selected as the Fellow of Korean Academy of Science and...',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2023-12-01-prof-ye-is-selected-as-the-fellow-of-korean-academy-of-science-and-tec/";
            },},{id: "news-six-papers-accepted-for-iclr-2024",
          title: 'Six papers accepted for ICLR 2024!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2024-01-01-six-papers-accepted-for-iclr-2024/";
            },},{id: "news-four-papers-got-accepted-for-cvpr-2024",
          title: 'Four papers got accepted for CVPR 2024!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2024-02-01-four-papers-got-accepted-for-cvpr-2024/";
            },},{id: "news-our-paper-on-chemical-foundation-models-appeared-on-nature-comm",
          title: 'Our Paper on Chemical Foundation Models Appeared on Nature Comm!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2024-03-01-our-paper-on-chemical-foundation-models-appeared-on-nature-comm/";
            },},{id: "news-two-papers-are-accepted-for-icml-2024",
          title: 'Two papers are accepted for ICML 2024!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2024-05-01-two-papers-are-accepted-for-icml-2024/";
            },},{id: "news-five-papers-accepted-for-eccv-2024",
          title: 'Five papers accepted for ECCV 2024!!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2024-07-01-five-papers-accepted-for-eccv-2024/";
            },},{id: "news-congratulation-seven-papers-accepted-for-iclr-2025",
          title: 'Congratulation! Seven papers accepted for ICLR 2025.',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-01-01-congratulation-seven-papers-accepted-for-iclr-2025/";
            },},{id: "news-congratulations-two-bispl-alumni-have-become-tenure-track-faculty-members",
          title: 'Congratulations! Two BISPL alumni have become tenure-track faculty members.',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-02-01-congratulations-two-bispl-alumuni-became-faculty-members/";
            },},{id: "news-congratulations-five-papers-accepted-for-cvpr-2025",
          title: 'Congratulations! Five papers accepted for CVPR 2025.',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-02-01-five-papers-accepted-for-cvpr-2025/";
            },},{id: "news-congraturations-two-papers-accepted-for-icml-2025",
          title: 'Congraturations! Two papers accepted for ICML 2025',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-05-01-congraturations-two-papers-accepted-for-icml-2025/";
            },},{id: "news-five-bispl-students-2025-summer-internships-at-top-ai-companies",
          title: 'Five BISPL Students’ 2025 Summer Internships at Top AI Companies',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-06-01-bispl-students-internship-at-major-tech-companies-at-summer-2025/";
            },},{id: "news-five-papers-accepted-to-iccv-2025",
          title: 'Five papers accepted to ICCV 2025!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-06-01-five-papers-accepted-for-iccv-2025/";
            },},{id: "news-congratulation-on-a-new-ieee-t-pami-paper",
          title: 'Congratulation on a new IEEE T-PAMI paper!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-08-01-congratulation-on-a-new-ieee-t-pami-paper/";
            },},{id: "news-congratulations-four-papers-accepted-at-neurips-2025",
          title: 'Congratulations —four papers accepted at NeurIPS 2025!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2025-09-01-congratulations-four-papers-accepted-at-neurips-2025/";
            },},{id: "news-congratulations-to-bispl-alumni-on-their-new-faculty-appointments",
          title: 'Congratulations to BISPL Alumni on Their New Faculty Appointments',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-01-01-congratulations-to-bispl-alumni-on-their-new-faculty-appointments/";
            },},{id: "news-congratulations-five-papers-accepted-to-iclr-2026",
          title: 'Congratulations -- five papers accepted to ICLR 2026!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-01-01-congratulations-five-papers-accepted-to-iclr-2026/";
            },},{id: "news-congratulations-to-bispl-39-s-new-tenure-track-faculty",
          title: 'Congratulations to BISPL&amp;#39;s New Tenure-Track Faculty',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-02-01-congratulations-new-tenure-track-faculty-from-bispl/";
            },},{id: "news-four-papers-including-one-in-findings-accepted-to-cvpr-2026",
          title: 'Four papers (including one in Findings) accepted to CVPR 2026!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-02-01-congratulations-three-papers-accepted-for-cvpr-2026/";
            },},{id: "news-congratulations-five-papers-two-splotlights-accepted-to-icml-2026",
          title: 'Congratulations -- Five papers (two splotlights) accepted to ICML 2026!',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-04-01-congratulations-five-papers-accepted-to-icml-2026/";
            },},{id: "news-this-semester-s-global-intern-dispatch-from-bispl",
          title: 'This Semester’s Global Intern Dispatch from BISPL',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-05-01-this-semesters-global-intern-dispatch-from-bispl/";
            },},{id: "news-congratulations-five-papers-accepted-to-eccv-2026",
          title: 'Congratulations! Five papers accepted to ECCV 2026.',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-06-01-congratulations-five-papers-accepted-to-eccv-2026/";
            },},{id: "news-bispl-students-awarded-funded-research-internships-at-prestigious-research-institutes",
          title: 'BISPL Students Awarded Funded Research Internships at Prestigious Research Institutes',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-07-01-academic-internship/";
            },},{
        id: 'social-scholar',
        title: 'Google Scholar',
        section: 'Socials',
        handler: () => {
          window.open("https://scholar.google.com/citations?user=HNMjoNEAAAAJ", "_blank");
        },
      },{
        id: 'social-github',
        title: 'GitHub',
        section: 'Socials',
        handler: () => {
          window.open("https://github.com/bispl-website", "_blank");
        },
      },{
        id: 'social-rss',
        title: 'RSS Feed',
        section: 'Socials',
        handler: () => {
          window.open("/feed.xml", "_blank");
        },
      },{
      id: 'light-theme',
      title: 'Change theme to light',
      description: 'Change the theme of the site to Light',
      section: 'Theme',
      handler: () => {
        setThemeSetting("light");
      },
    },
    {
      id: 'dark-theme',
      title: 'Change theme to dark',
      description: 'Change the theme of the site to Dark',
      section: 'Theme',
      handler: () => {
        setThemeSetting("dark");
      },
    },
    {
      id: 'system-theme',
      title: 'Use system default theme',
      description: 'Change the theme of the site to System Default',
      section: 'Theme',
      handler: () => {
        setThemeSetting("system");
      },
    },];
