new Vue({  // Starter-Pack Loan Calculator  
  el: '#starter-pack', 
  data() {
    return {
      amountoutput:"500",
      periodoutput:"2",
      amountToPay:"627.50",
      InterestAmount:"127.50",
      monthly:"313.75",
    }
  } ,
  watch:{
amountoutput:function(amount){
this.amountoutput=amount;
if(this.periodoutput==1){
  this.amountToPay=(parseFloat(0.1275*amount*1) + parseFloat(amount)).toFixed(2);
  this.InterestAmount=parseFloat(0.1275*amount*1).toFixed(2);
  this.monthly=parseFloat(this.amountToPay/1).toFixed(2);
}

if(this.periodoutput==2){
  this.amountToPay=(parseFloat(0.1275*amount*2) + parseFloat(amount)).toFixed(2);
  this.InterestAmount=parseFloat(0.1275*amount*2).toFixed(2);
  this.monthly=parseFloat(this.amountToPay/2).toFixed(2);
}



if(this.periodoutput==3){
  this.amountToPay=(parseFloat(0.1275*amount*3) + parseFloat(amount)).toFixed(2);
  this.InterestAmount=parseFloat(0.1275*amount*3).toFixed(2);
  this.monthly=parseFloat(this.amountToPay/3).toFixed(2);
}



if(this.periodoutput==4){
  this.amountToPay=(parseFloat(0.1275*amount*4) + parseFloat(amount)).toFixed(2);
  this.InterestAmount=parseFloat(0.1275*amount*4).toFixed(2);
  this.monthly=parseFloat(this.amountToPay/4).toFixed(2);
}

if(this.periodoutput==5){
  this.amountToPay=(parseFloat(0.1275*amount*5) + parseFloat(amount)).toFixed(2);
  this.InterestAmount=parseFloat(0.1275*amount*5).toFixed(2);
  this.monthly=parseFloat(this.amountToPay/5).toFixed(2);
}


if(this.periodoutput==6){
  this.amountToPay=(parseFloat(0.1275*amount*6) + parseFloat(amount)).toFixed(2);
  this.InterestAmount=parseFloat(0.1275*amount*6).toFixed(2);
  this.monthly=parseFloat(this.amountToPay/6).toFixed(2);
}

    },



    periodoutput:function(period){
      
      this.periodoutput=period;
      if(period==1){
        this.amountToPay=(parseFloat(0.1275*this.amountoutput*1) + parseFloat(this.amountoutput)).toFixed(2);
        this.InterestAmount=parseFloat(0.1275*this.amountoutput*1).toFixed(2);
        this.monthly=parseFloat(this.amountToPay/1).toFixed(2);
      }
      
      if(period==2){
        this.amountToPay=(parseFloat(0.1275*this.amountoutput*2) + parseFloat(this.amountoutput)).toFixed(2);
        this.InterestAmount=parseFloat(0.1275*this.amountoutput*2).toFixed(2);
        this.monthly=parseFloat(this.amountToPay/2).toFixed(2);
      }
      
      
      
      if(period==3){
        this.amountToPay=(parseFloat(0.1275*this.amountoutput*3) + parseFloat(this.amountoutput)).toFixed(2);
        this.InterestAmount= parseFloat(0.1275*this.amountoutput*3).toFixed(2);
        this.monthly=parseFloat(this.amountToPay/3).toFixed(2);
      }
      
      
      
      if(period==4){
        this.amountToPay=(parseFloat(0.1275*this.amountoutput*4) + parseFloat(this.amountoutput)).toFixed(2);
        this.InterestAmount=parseFloat(0.1275*this.amountoutput*4).toFixed(2);
        this.monthly=parseFloat(this.amountToPay/4).toFixed(2);
      }
      if(period==5){
        this.amountToPay=(parseFloat(0.1275*this.amountoutput*5) + parseFloat(this.amountoutput)).toFixed(2);
        this.InterestAmount=parseFloat(0.1275*this.amountoutput*5).toFixed(2);
        this.monthly=parseFloat(this.amountToPay/5).toFixed(2);
      }
      if(period==6){
        this.amountToPay=(parseFloat(0.1275*this.amountoutput*6) + parseFloat(this.amountoutput)).toFixed(2);
        this.InterestAmount=parseFloat(0.1275*this.amountoutput*6).toFixed(2);
        this.monthly=parseFloat(this.amountToPay/6).toFixed(2);
      }
}
}
  });



  new Vue({   // Term Loan Calculator
    el: '#private-sector', 
    data() {
      return {
        amountoutput:"1000",
        periodoutput:"3",
        amountToPay:"1290.50",
        InterestAmount:"292.50",
        monthly:"430.83",
      }
    } ,
    watch:{
  amountoutput:function(amount){
  this.amountoutput=amount;
  if(this.periodoutput==1){
    this.amountToPay=(parseFloat(0.0975*amount*1) + parseFloat(amount)).toFixed(2);
    this.InterestAmount=parseFloat(0.0975*amount*1).toFixed(2);
    this.monthly=parseFloat(this.amountToPay/1).toFixed(2);
  }
  
  if(this.periodoutput==2){
    this.amountToPay=(parseFloat(0.0975*amount*2) + parseFloat(amount)).toFixed(2);
    this.InterestAmount=parseFloat(0.0975*amount*2).toFixed(2);
    this.monthly=parseFloat(this.amountToPay/2).toFixed(2);
  }
  
  
  
  if(this.periodoutput==3){
    this.amountToPay=(parseFloat(0.0975*amount*3) + parseFloat(amount)).toFixed(2);
    this.InterestAmount=parseFloat(0.0975*amount*3).toFixed(2);
    this.monthly=parseFloat(this.amountToPay/3).toFixed(2);
  }
  
  
  
  if(this.periodoutput==4){
    this.amountToPay=(parseFloat(0.0975*amount*4) + parseFloat(amount)).toFixed(2);
    this.InterestAmount=parseFloat(0.0975*amount*4).toFixed(2);
    this.monthly=parseFloat(this.amountToPay/4).toFixed(2);
  }
  
  if(this.periodoutput==5){
    this.amountToPay=(parseFloat(0.0975*amount*5) + parseFloat(amount)).toFixed(2);
    this.InterestAmount=parseFloat(0.0975*amount*5).toFixed(2);
    this.monthly=parseFloat(this.amountToPay/5).toFixed(2);
  }
  
  
  if(this.periodoutput==6){
    this.amountToPay=(parseFloat(0.0975*amount*6) + parseFloat(amount)).toFixed(2);
    this.InterestAmount=parseFloat(0.0975*amount*6).toFixed(2);
    this.monthly=parseFloat(this.amountToPay/6).toFixed(2);
  }
  
      },
  
  
  
      periodoutput:function(period){
        
        this.periodoutput=period;
        if(period==1){
          this.amountToPay=(parseFloat(0.0975*this.amountoutput*1) + parseFloat(this.amountoutput)).toFixed(2);
          this.InterestAmount=parseFloat(0.0975*this.amountoutput*1).toFixed(2);
          this.monthly=parseFloat(this.amountToPay/1).toFixed(2);
        }
        
        if(period==2){
          this.amountToPay=(parseFloat(0.0975*this.amountoutput*2) + parseFloat(this.amountoutput)).toFixed(2);
          this.InterestAmount=parseFloat(0.0975*this.amountoutput*2).toFixed(2);
          this.monthly=parseFloat(this.amountToPay/2).toFixed(2);
        }
        
        
        
        if(period==3){
          this.amountToPay=(parseFloat(0.0975*this.amountoutput*3) + parseFloat(this.amountoutput)).toFixed(2);
          this.InterestAmount= parseFloat(0.0975*this.amountoutput*3).toFixed(2);
          this.monthly=parseFloat(this.amountToPay/3).toFixed(2);
        }
        
        
        
        if(period==4){
          this.amountToPay=(parseFloat(0.0975*this.amountoutput*4) + parseFloat(this.amountoutput)).toFixed(2);
          this.InterestAmount=parseFloat(0.0975*this.amountoutput*4).toFixed(2);
          this.monthly=parseFloat(this.amountToPay/4).toFixed(2);
        }
        if(period==5){
          this.amountToPay=(parseFloat(0.0975*this.amountoutput*5) + parseFloat(this.amountoutput)).toFixed(2);
          this.InterestAmount=parseFloat(0.0975*this.amountoutput*5).toFixed(2);
          this.monthly=parseFloat(this.amountToPay/5).toFixed(2);
        }
        if(period==6){
          this.amountToPay=(parseFloat(0.0975*this.amountoutput*6) + parseFloat(this.amountoutput)).toFixed(2);
          this.InterestAmount=parseFloat(0.0975*this.amountoutput*6).toFixed(2);
          this.monthly=parseFloat(this.amountToPay/6).toFixed(2);
        }
  }
  }
    });






    new Vue({   // Auto Loan Calculator
      el: '#auto-loan', 
      data() {
        return {
          amountoutput:"7000",
          periodoutput:"4",
          amountToPay:"10570",
          InterestAmount:"3570",
          monthly:"2642.50",
        }
      } ,
      watch:{
    amountoutput:function(amount){
    this.amountoutput=amount;
    if(this.periodoutput==1){
      this.amountToPay=(parseFloat(0.1275*amount*1) + parseFloat(amount)).toFixed(2);
      this.InterestAmount=parseFloat(0.1275*amount*1).toFixed(2);
      this.monthly=parseFloat(this.amountToPay/1).toFixed(2);
    }
    
    if(this.periodoutput==2){
      this.amountToPay=(parseFloat(0.1275*amount*2) + parseFloat(amount)).toFixed(2);
      this.InterestAmount=parseFloat(0.1275*amount*2).toFixed(2);
      this.monthly=parseFloat(this.amountToPay/2).toFixed(2);
    }
    
    
    
    if(this.periodoutput==3){
      this.amountToPay=(parseFloat(0.1275*amount*3) + parseFloat(amount)).toFixed(2);
      this.InterestAmount=parseFloat(0.1275*amount*3).toFixed(2);
      this.monthly=parseFloat(this.amountToPay/3).toFixed(2);
    }
    
    
    
    if(this.periodoutput==4){
      this.amountToPay=(parseFloat(0.1275*amount*4) + parseFloat(amount)).toFixed(2);
      this.InterestAmount=parseFloat(0.1275*amount*4).toFixed(2);
      this.monthly=parseFloat(this.amountToPay/4).toFixed(2);
    }
    
    if(this.periodoutput==5){
      this.amountToPay=(parseFloat(0.1275*amount*5) + parseFloat(amount)).toFixed(2);
      this.InterestAmount=parseFloat(0.1275*amount*5).toFixed(2);
      this.monthly=parseFloat(this.amountToPay/5).toFixed(2);
    }
    
    
    if(this.periodoutput==6){
      this.amountToPay=(parseFloat(0.1275*amount*6) + parseFloat(amount)).toFixed(2);
      this.InterestAmount=parseFloat(0.1275*amount*6).toFixed(2);
      this.monthly=parseFloat(this.amountToPay/6).toFixed(2);
    }
    
        },
    
    
    
        periodoutput:function(period){
          
          this.periodoutput=period;
          if(period==1){
            this.amountToPay=(parseFloat(0.1275*this.amountoutput*1) + parseFloat(this.amountoutput)).toFixed(2);
            this.InterestAmount=parseFloat(0.1275*this.amountoutput*1).toFixed(2);
            this.monthly=parseFloat(this.amountToPay/1).toFixed(2);
          }
          
          if(period==2){
            this.amountToPay=(parseFloat(0.1275*this.amountoutput*2) + parseFloat(this.amountoutput)).toFixed(2);
            this.InterestAmount=parseFloat(0.1275*this.amountoutput*2).toFixed(2);
            this.monthly=parseFloat(this.amountToPay/2).toFixed(2);
          }
          
          
          
          if(period==3){
            this.amountToPay=(parseFloat(0.1275*this.amountoutput*3) + parseFloat(this.amountoutput)).toFixed(2);
            this.InterestAmount= parseFloat(0.1275*this.amountoutput*3).toFixed(2);
            this.monthly=parseFloat(this.amountToPay/3).toFixed(2);
          }
          
          
          
          if(period==4){
            this.amountToPay=(parseFloat(0.1275*this.amountoutput*4) + parseFloat(this.amountoutput)).toFixed(2);
            this.InterestAmount=parseFloat(0.1275*this.amountoutput*4).toFixed(2);
            this.monthly=parseFloat(this.amountToPay/4).toFixed(2);
          }
          if(period==5){
            this.amountToPay=(parseFloat(0.1275*this.amountoutput*5) + parseFloat(this.amountoutput)).toFixed(2);
            this.InterestAmount=parseFloat(0.1275*this.amountoutput*5).toFixed(2);
            this.monthly=parseFloat(this.amountToPay/5).toFixed(2);
          }
          if(period==6){
            this.amountToPay=(parseFloat(0.1275*this.amountoutput*6) + parseFloat(this.amountoutput)).toFixed(2);
            this.InterestAmount=parseFloat(0.1275*this.amountoutput*6).toFixed(2);
            this.monthly=parseFloat(this.amountToPay/6).toFixed(2);
          }
    }
    }
      });





     