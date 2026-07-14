// get the ninja-keys element
const ninja = document.querySelector('ninja-keys');

// add the home and posts menu items
ninja.data = [{
    id: "nav-about",
    title: "about",
    section: "Navigation",
    handler: () => {
      window.location.href = "/";
    },
  },{id: "nav-news",
          title: "news",
          description: "",
          section: "Navigation",
          handler: () => {
            window.location.href = "/news/";
          },
        },{id: "nav-people",
          title: "people",
          description: "Current members and alumni of BISPL @ KAIST.",
          section: "Navigation",
          handler: () => {
            window.location.href = "/people/";
          },
        },{id: "nav-publications",
          title: "publications",
          description: "Publications by BISPL @ KAIST, in reverse chronological order.",
          section: "Navigation",
          handler: () => {
            window.location.href = "/publications/";
          },
        },{id: "nav-professor",
          title: "professor",
          description: "Prof. Jong Chul Ye — KAIST Endowed Chair Professor, IEEE Fellow.",
          section: "Navigation",
          handler: () => {
            window.location.href = "/professor/";
          },
        },{id: "nav-hall-of-fame",
          title: "hall of fame",
          description: "BISPL annual awards, recognizing outstanding research and service since 2013.",
          section: "Navigation",
          handler: () => {
            window.location.href = "/awards/";
          },
        },{id: "news-four-papers-accepted-to-cvpr-2026",
          title: 'Four papers accepted to CVPR 2026',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-02-21-four-papers-accepted-to-cvpr-2026/";
            },},{id: "news-five-papers-two-spotlights-accepted-to-icml-2026",
          title: 'Five papers (two spotlights) accepted to ICML 2026',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-04-30-five-papers-two-spotlights-accepted-to-icml-2026/";
            },},{id: "news-global-intern-dispatch-from-bispl",
          title: 'Global Intern Dispatch from BISPL',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-05-13-global-intern-dispatch-from-bispl/";
            },},{id: "news-five-papers-accepted-to-eccv-2026",
          title: 'Five papers accepted to ECCV 2026',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-06-18-five-papers-accepted-to-eccv-2026/";
            },},{id: "news-academic-internship",
          title: 'Academic Internship',
          description: "",
          section: "News",handler: () => {
              window.location.href = "/news/2026-07-13-academic-internship/";
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
