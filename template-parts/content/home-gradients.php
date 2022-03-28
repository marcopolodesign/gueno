<div class="absolute big-gradient ball-gradient z--1"></div>
<div class="absolute small-gradient ball-gradient z--1"></div>

<div class="absolute big-gradient second ball-gradient z--1"></div>
<div class="absolute small-gradient second ball-gradient z--1"></div>

<div class="absolute big-gradient ball-gradient change  z--1 o-0"></div>
<div class="absolute big-gradient change second ball-gradient z--1 o-0"></div>

<div class="absolute small-gradient change ball-gradient z--1 o-0"></div>
<div class="absolute small-gradient change second ball-gradient z--1 o-0"></div>


<style>

.ball-gradient {
  filter: blur(22px);
  border-radius: 100%;
  animation: bounce 5s linear infinite both;
  animation-duration: 5s;
  transition: var(--smooth);
}

.big-gradient.second {
  animation: bounce 5s linear infinite both;
}

@keyframes bounce {
  0% {
    transform: scale(1) translate(0%);
  }

  50% {
    transform: scale(1.3) translate(5%, 30%);
  }

  50% {
    transform: scale(0.9) translateY(-2%, -5%);
  }

  100% {
    transform: scale(1)  translateY(0%)
  }
}



.big-gradient {
    width: 80vw;
    height: 80vw;
    background: radial-gradient(49.45% 49.45% at 25.47% 31.59%, #66CA70 10%, rgba(102, 202, 112, 0) 100%);
    right: -40%;
    bottom: -5%;
    transition: var(--smooth)
  }

  .small-gradient {
    width: 30vw;
    height: 30vw;

    top: -5%;
    right: -10%;
    background: radial-gradient(85.87% 104.58% at 49.94% 16.08%, #66CAB8 0%, rgba(125, 210, 195, 0) 100%);
  }


  .change {
    background: radial-gradient(49.45% 49.45% at 25.47% 31.59%, #B066CA 0%, rgba(112, 125, 193, 0.1) 100%);
  }

  .small-gradient.change {
    background: radial-gradient(85.87% 104.58% at 49.94% 16.08%, #F0EA62 0%, rgba(210, 150, 125, 0) 100%) !important;
    transition-duration: 5s;
  }

  .big-gradient.second {
    top: -30%;
    left:-30%;
    right: unset; 
    bottom: unset
  }
  
  .small-gradient.second {
    bottom: unset;
    left:-15%;

    top: 20%;

    right: unset;
    background: radial-gradient(49.21% 40.4% at 72.09% 29.66%, #66CAB8 0%, rgba(125, 210, 195, 0) 100%)
  }
  </style>


