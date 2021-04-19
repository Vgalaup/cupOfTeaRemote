
export default class Slider {

    constructor(){
      this.slider = document.querySelectorAll('.slider-figure');
      this.index = 0
      this.play();
    }
  
    play() {
        console.log(this.slider.length-1)
        this.index++

        if (this.index == this.slider.length-1) {
            // On revient au premier élément du tableau si index dépasse la taille du tableau
            this.index = 0
        }
        
        this.refresh();
        
        setTimeout(this.play, 2000);
        
    }
  
    refresh() {
      // On supprime la classe de l'élément précédemment affiché
      const oldActive = document.querySelector('.active')
      oldActive.classList.remove('active')
      
      // Affichage de la nouvelle image
      this.slider[this.index].classList.add('active')
    }
  
  }
  
  
  