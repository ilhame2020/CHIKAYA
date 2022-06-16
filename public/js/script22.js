new Vue({
  el: '#q-app',
  data() {
    return {
      model: null,
      options: [
      {
        label: 'Etablissement et entreprises publics',
        children: [
        {
          label: 'Santé' },

        {
          label: 'Education' },

        {
          label: 'investissement' }] },



      {
        label: 'Collectivité territoriales',
        children: [
        {
          label: 'Régional' },

        {
          label: 'Provincial ' },

        {
          label: 'communal' }] },



       {
         label: 'Ministères et Haut commissariats',
         children: [
         {
           label: 'Haut commissariats' },

         {
          label: 'Ministères' }] },
      //     {
      //       label: 'Italian cars'
      
      //         label: 'Lamborghini' },
    
      //       {
      //         label: 'Maserati' }] },
    
      //         {
      //           label: 'Italian cars',
      //           children: [
      //           {
      //             label: 'Ferrari' },
        
      //           {
      //             label: 'Lamborghini' },
        
      //           {
      //             label: 'Maserati' }
      //           ] },

      // {
      //   label: 'Japanese cars',
      //   children: [
      //   {
      //     label: 'Honda' },

      //   {
      //     label: 'Nissan' },

      //   {
      //     label: 'Toyota' }] }
    ] };





  },

  methods: {
    getLabel(scope) {
      console.log(scope);
      return scope.label;
    },
    hasChild(scope) {
      return scope.opt.children.some(c => c.label === this.model);
    } } });