<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { FormControl, Validators } from '@angular/forms';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-transaction',
  templateUrl: './transaction.component.html',
  styleUrls: ['./transaction.component.css']
})
export class TransactionComponent implements OnInit {
  adresse = new FormControl('', [Validators.required]);
  telephone= new FormControl('', [Validators.required]);
  nomComplet= new FormControl('', [Validators.required]);
  numeroPiece= new FormControl('', [Validators.required]);
  montant= new FormControl('',[Validators.required]);

  expediteur= {};
  beneficiaire= {};
  errorMessage: {};
  transaction:{};
  reussie:String=null;
  getErrorMessage() {
    return this.adresse.hasError('required') ? 'You must enter a value' :
            this.telephone.hasError('required')? 'You must enter a value':
            this.nomComplet.hasError('required')?'You must enter a value':
            this.numeroPiece.hasError('required')? 'You must enter a value':
            this.montant.hasError('required')?'You must enter a value':
            '';
  }
  constructor(private data:DataService, private router:Router, private toastr: ToastrService) { }

  ngOnInit() {
  }

  envoiTransact(){
    this.data.envoiTransact(this.expediteur,this.beneficiaire).subscribe(
      data=>{
        this.errorMessage=data.message
        this.expediteur=data
        this.beneficiaire=data
        this.transaction=data
        console.log(data)
        this.reussie="oui"
    })

  }
  imprimerRecu(){
    window.print()
  }

}
=======
import { Component, OnInit } from '@angular/core';
import { FormControl, Validators } from '@angular/forms';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-transaction',
  templateUrl: './transaction.component.html',
  styleUrls: ['./transaction.component.css']
})
export class TransactionComponent implements OnInit {
  adresse = new FormControl('', [Validators.required]);
  telephone= new FormControl('', [Validators.required]);
  nomComplet= new FormControl('', [Validators.required]);
  numeroPiece= new FormControl('', [Validators.required]);
  montant= new FormControl('',[Validators.required]);

  expediteur= {};
  beneficiaire= {};
  errorMessage: {};
  getErrorMessage() {
    return this.adresse.hasError('required') ? 'You must enter a value' :
            this.telephone.hasError('required')? 'You must enter a value':
            this.nomComplet.hasError('required')?'You must enter a value':
            this.numeroPiece.hasError('required')? 'You must enter a value':
            this.montant.hasError('required')?'You must enter a value':
            '';
  }
  constructor(private data:DataService, private router:Router, private toastr: ToastrService) { }

  ngOnInit() {
  }

  envoiTransact(){
    this.data.envoiTransact(this.expediteur,this.beneficiaire).subscribe(
      data=>{
        this.errorMessage=data
        this.toastr.warning("envoi effectué")
        this.router.navigate(['/home'])
    })

  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
