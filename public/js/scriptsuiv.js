new Vue({
    el: '#q-app',
    data() {
      return {
        model: null,
        options: [
        {
          label: 'Hygiene Alimentaire',
          children: [
          {
            label: 'Restaurant' },
  
          {
            label: 'Café' },
  
          {
            label: '' }] },
  
  
  
        {
          label: 'Commune',
          children: [
          {
            label: 'Fonctionnaire' },
  
          {
            label: '' },
  
          {
            label: '' }] },
  
  
  
        // {
        //   label: 'Italian cars',
        //   children: [
        //   {
        //     label: 'Ferrari' },
  
        //   {
        //     label: 'Lamborghini' },
  
        //   {
        //     label: 'Maserati' }] },
        //     {
        //       label: 'Italian cars',
        //       children: [
        //       {
        //         label: 'Ferrari' },
      
        //       {
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