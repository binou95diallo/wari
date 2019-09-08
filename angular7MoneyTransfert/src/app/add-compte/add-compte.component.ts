import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { FormControl, Validators } from '@angular/forms';
import { ToastrService } from 'ngx-toastr';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-add-compte',
  templateUrl: './add-compte.component.html',
  styleUrls: ['./add-compte.component.css']
})
export class AddCompteComponent implements OnInit {
  errorMessage:string;
  solde=new FormControl('', [Validators.required]);
  getErrorMessage() {
      return this.solde.hasError('required')?'You must enter a value':
      '';
  }
  
  constructor(private data:DataService, private router:Router, private toastr: ToastrService) { }

  ngOnInit() {
  }
  addCompte(){
    this.data.addCompte(this.solde)
    .subscribe(
      res => {/* console.log("compte numéro "+res.numeroCompte+ "avec un solde initial de "+this.solde+"ajouté")
        this.toastr.success("compte numéro "+res.numeroCompte+ "avec un solde initial de "+this.solde+"ajouté") */
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: "compte numéro "+res.numeroCompte+ "avec un solde initial de "+this.solde+"ajouté",
          showConfirmButton: false,
          timer: 3500
        })
        this.router.navigate(['/compte'])
      },
      err =>{
        console.log(err.text)
       
      }
    )   
  }

}
