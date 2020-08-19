<template>
  <div class="contact">
    <div class="div">
      <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" alt="contact">
      <p class="contact">Contactez moi</p>
    </div>
      <form class="" action="formEmail.php" method="post" name="myemailform">
                <legend class="Vos-coordonnees">Envoyer nous votre message</legend>
                  <input type="text" name="nom" value="" id="name" placeholder="Votre nom">
                  <input type="text" name="email" value="" id="email" placeholder="Votre email">
                  <textarea id="message" class="input" name="message"  cols="50" rows="6" placeholder="Votre message"></textarea>
                  <input type="submit" name="Envoyer" value="Envoyer" class="btn">
                 <!-- <button type="button" @click="postForm()">Envoyer</button> -->
    </form>
    <p v-if="success">Le message à été bien envoyer</p>
  </div>
</template>

<script>
// @ is an alias to /src
//import Contact from "@/components/Contact.vue";


export default {
  name: "ContactPage",
  data() {
    return {

       nom: "",
       email: "",
       message: "",
       success: false,
    }
  },
  // components: {Contact},
  // methods:{
    // submit form handler
    // submit: function() {
    //   this.submitted = true;
    // },
  //   postForm() {
  //   const axios = require('axios');
  //   axios.post(`http://localhost:3000//`, {
  //       nom: this.nom,
  //       email: this.email,
  //       message: this.message,
  //   })
  //   .then(() => {
  //     this.nom = "";
  //     this.email = "";
  //     this.message = "";
  //     this.success = true;
  //     })
  // }

};
</script>
<style scoped >
img{
  position: relative;
  left:0;
  top:0;
   width: 100%;
   height: 400px;
}
.contact{
font-size: 2em;
top:   10%;
left: 32px;
margin: 0;
/* position: absolute; */
text-align: center;
}

.Vos-coordonnees{
  font-size: 2em;
  margin: 10px;
}
 form{
  margin-left:  10%;


}
label{
  display: block;
  font-weight: bold;
  font-size: 20px;
  margin: 10px;

}
input[type="text"]{
  display: block;
  padding: 20px;
  font-size: 20px;
  margin-top: 10px;
  border-top: 1px solid #FAFAFA;
  border-right: 1px solid #FAFAFA;
  border-left: 1px solid #FAFAFA;
  border-bottom:  1px solid black;
  width: 45%;
  background-color: #E6E6E6


}
#message{
  display: block;
  margin-top: 10px;
  font-size: 20px;
  border-top: 1px solid #FAFAFA;
  border-right: 1px solid #FAFAFA;
  border-left: 1px solid #FAFAFA;
  border-bottom:  1px solid black;
  background-color: #E6E6E6;
}
.btn{
display:block;
 width: 100px;
 height: 50px;
 /* font style */
 font-family: Arial,sans-serif;
 font-size: medium;
 font-weight: bold;
 /* background style */
  text-align: center;
  background-color: black;
  color: white;

}
.btn:hover {
background: grey;
}

</style>
