<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-transaction-retrait',
  templateUrl: './transaction-retrait.component.html',
  styleUrls: ['./transaction-retrait.component.css']
})
export class TransactionRetraitComponent implements OnInit {
 
 beneficiaire:{};
 errorMessage: string;
 errorMessageR:string;
 codeEnter:string;
 code=new FormControl('',[Validators.required]);
 adresse = new FormControl('', [Validators.required]);
  telephone= new FormControl('', [Validators.required]);
  nomComplet= new FormControl('', [Validators.required]);
  ncni= new FormControl('', [Validators.required]);
 getErrorMessage() {
       return this.adresse.hasError('required') ? 'You must enter a value' :
              this.telephone.hasError('required')? 'You must enter a value':
              this.nomComplet.hasError('required')?'You must enter a value':
              this.ncni.hasError('required')? 'You must enter a value':  
              this.code.hasError('required')?'You must enter a value':
          '';
}
  constructor(private data:DataService) { }

  ngOnInit() {
    //this.recupBeneficiaire(this.codeEnter);
  }

  recupBeneficiaire(codeEnter){
    this.data.recupBeneficiaire(codeEnter).subscribe(
      data=>{
        this.beneficiaire=data;
        console.log(data);
        return this.beneficiaire;
    },err=>this.errorMessage=err.error.message);
  }
  isVerif(){
    return this.beneficiaire;
  }

  retraitTransact(codeEnter){
    this.data.retraitTransact(codeEnter,this.beneficiaire).subscribe(data=>{
      console.log(data);
      this.errorMessageR=data.message
    });
  }

}
=======
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-transaction-retrait',
  templateUrl: './transaction-retrait.component.html',
  styleUrls: ['./transaction-retrait.component.css']
})
export class TransactionRetraitComponent implements OnInit {
 
 beneficiaire:{};
 errorMessage: string;
 errorMessageR:string;
 codeEnter:string;
 code=new FormControl('',[Validators.required]);
 adresse = new FormControl('', [Validators.required]);
  telephone= new FormControl('', [Validators.required]);
  nomComplet= new FormControl('', [Validators.required]);
  ncni= new FormControl('', [Validators.required]);
 getErrorMessage() {
       return this.adresse.hasError('required') ? 'You must enter a value' :
              this.telephone.hasError('required')? 'You must enter a value':
              this.nomComplet.hasError('required')?'You must enter a value':
              this.ncni.hasError('required')? 'You must enter a value':  
              this.code.hasError('required')?'You must enter a value':
          '';
}
  constructor(private data:DataService) { }

  ngOnInit() {
    //this.recupBeneficiaire(this.codeEnter);
  }

  recupBeneficiaire(codeEnter){
    this.data.recupBeneficiaire(codeEnter).subscribe(
      data=>{
        this.beneficiaire=data;
        console.log(data);
        return this.beneficiaire;
    },err=>this.errorMessage=err.error.message);
  }
  isVerif(){
    return this.beneficiaire;
  }

  retraitTransact(codeEnter){
    this.data.retraitTransact(codeEnter,this.beneficiaire).subscribe(data=>{
      console.log(data);
      this.errorMessageR="retrait effectué avec succés!"
    });
  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
