<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.float-layout {
  padding: 5px 5px;
  float: left;
  width: 100%;
  height: auto;
  box-sizing: border-box;
  margin: 0;
}

.card-container {
  overflow: hidden;
}

.card {
  background-color: dodgerblue;
  color: black;
  height: 15rem; /*replace this it in width: 100%*/
  width: 50%;
  float: right;
}

.card-title {
  font-size: 30px;
  text-align: center;
  font-weight: bold;
  padding-top: 20px;
}

.card-desc {
  padding: 10px;
  text-align: left;
  font-size: 18px;
}

/*add this it*/
.card-image {
  display: flex;
  margin-left: 20rem;
}
/*-------------*/

div.card-image img {
  width: 50%;
  height: auto;
}

/* Phone Devices Query */
@media only screen and (max-width: 37.5em) {
  div.card-image img {
    width: 100%;
    height: auto;
  }
  
  /*add this it*/
  .card-image {
     flex-direction: column;
  }
  /*----------------------*/

  .card {
    width: 100%;
    margin-top: -4px;
  }
}
</style>

</head>
<body>

<h2 style="text-align: center;">Vegetarian Menu</h2>
    
<div class="card-container">
  <div class="float-layout">
    <div class="card-image">
      <img src="<?= base_url('assets/img/food/photo-1617524455443-e2c807d80d29.jpg') ?>"  style="width:200px;height:150px">
      <div class="card">
        <div class="card-title">Title</div>
        <div class="card-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper
          mollis tempus. Mauris eu maximus lectus, eu auctor justo. Aenean porta purus
          vel commodo consequat.
        </div>
      </div>
    </div>   
  </div>
  <div class="float-layout">
    <div class="card-image">
      <img src="<?= base_url('assets/img/food/photo-1617524455443-e2c807d80d29.jpg') ?>"  style="width:200px;height:150px">
      <div class="card">
        <div class="card-title">Title</div>
        <div class="card-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper
          mollis tempus. Mauris eu maximus lectus, eu auctor justo. Aenean porta purus
          vel commodo consequat.
        </div>
      </div>
    </div>    
  </div>

  <div class="float-layout">
    <div class="card-image">
      <img src="<?= base_url('assets/img/food/photo-1617524455443-e2c807d80d29.jpg') ?>"  style="width:200px;height:150px">
      <div class="card">
        <div class="card-title">Title</div>
        <div class="card-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper
          mollis tempus. Mauris eu maximus lectus, eu auctor justo. Aenean porta purus
          vel commodo consequat.
        </div>
      </div>
    </div>    
  </div>

</div>
</body>
</html>