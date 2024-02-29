const menus = [
    {
        id: '0',
        name: 'Home',
        link: '/'
    },
    {
        id: '1',
        name: 'Composition Styles',
        items: [
            {
                id: '1_1',
                name: 'Getting Started',
                link: '/composition/getting-started',
            },
        ]
    },
    {
        id: '2',
        name: 'Options Styles',
        items: [
            {
                id: '2_1',
                name: 'Getting Started',
                link: '/options/getting-started',
            },
        ]
    },
]



  export default {
    getMenus() {
      return menus;
    },
  };
