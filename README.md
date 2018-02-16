# MWD
My codes and practice


Rebuilded gallery so the bottom thumbnails contains slickslider.
In order to add more pictures and galleries one must change values on many variables.

Step 1:
In properties0.blade.php find the comment <!-- Images used to open the lightbox -->. Within that area you will find divs with img and description. Where the img is, just after the src link there is a onclick event which trigger:
a) casegallery(x) & openModal(x);   <--- which modal and pictures to use
b) currentSlide(x);   <--- which slide should be displayed after opening the modal; I personally keep it as (1) as I always want to display first picture of the gallery
c) refreshthumb();   <-- repairs common problem with using slickslider within the modal galleries; trigger with no value!

Step 2:
<-- The Modal/Lightbox x -->
This comment separate every new modal gallery accessed through the click on picture. The x value should be same for all next variables such as: id="x" ; closeModal(x) ; class="modx" ; id="captionx" ; formchoice(x) ; id="contactFormx" ; class="responsivex" ; class="imgthumbx";   

Wherever is "x" value it must correspont the number of the Modal/Lightbox gallery you want to place in. If you do that scripts will work itself to calculate it as they are dynamically assigned with values.

In case of my project I have added only 4 Modal/Lightboxes just to practice.

The code on the blog.blade.php and content.blade.php was not changed so there are no slick-slider added to those galleries and they might even crash.

Step 3: If you add more Modal/Lightbox the area with the class="responsivex" must be added also to the script. Let's assume you adding fifth gallery Modal/Lightbox 5. You assigned all the variables above where x = 5. Then you need to go to the slickinthumb.js and add there new styling: x = 5;

  $('.responsivex').slick({
  command: value,
  ...
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        command: value,
        ...
      }
    },
    {
      breakpoint: 600,
      settings: {
        command: value,
        ...
      }
    },
    {
      breakpoint: 480,
      settings: {
        command: value,
        ...
      }
    }
  ]
});

Have fun =) if the explanation is too complicated or I made any mistakes please let me know and I can change it.
