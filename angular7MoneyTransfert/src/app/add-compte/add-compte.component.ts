import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-add-compte',
  templateUrl: './add-compte.component.html',
  styleUrls: ['./add-compte.component.css']
})
export class AddCompteComponent implements OnInit {

  solde=new FormControl('', [Validators.required]);
  getErrorMessage() {
      return this.solde.hasError('required')?'You must enter a value':
      '';
  }
  
  constructor(private data:DataService, private router:Router) { }

  ngOnInit() {
  }
  addCompte(){
    this.data.addCompte(this.solde)
    .subscribe(
      res => {
        this.router.navigate(['/compte'])
      },
      err => console.log(err)
    )   
  }

}
