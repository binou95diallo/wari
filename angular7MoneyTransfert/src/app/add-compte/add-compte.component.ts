<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router, ActivatedRoute } from '@angular/router';
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
  
  constructor(private data:DataService, private router:Router, private toastr: ToastrService,private route: ActivatedRoute) { }

  ngOnInit() {
  }
  addCompte(){
    const id = +this.route.snapshot.paramMap.get('id');
    this.data.addCompte(this.solde,id)
    .subscribe(
      res => {/* console.log("compte numéro "+res.numeroCompte+ "avec un solde initial de "+this.solde+"ajouté")
        this.toastr.success("compte numéro "+res.numeroCompte+ "avec un solde initial de "+this.solde+"ajouté") */
        Swal.fire({
          position: 'center',
          type: 'success',
          title: "compte numéro "+res.numeroCompte+ "  avec un solde initial de  "+this.solde+"  ajouté",
          showConfirmButton: false,
          timer: 4500
        })
        //this.router.navigate(['/compte'])
      },
      err =>{
        console.log(err.text)
       
      }
    )   
  }

}
=======
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router, ActivatedRoute } from '@angular/router';
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
  
  constructor(private data:DataService, private router:Router, private toastr: ToastrService,private route: ActivatedRoute) { }

  ngOnInit() {
  }
  addCompte(){
    const id = +this.route.snapshot.paramMap.get('id');
    this.data.addCompte(this.solde,id)
    .subscribe(
      res => {/* console.log("compte numéro "+res.numeroCompte+ "avec un solde initial de "+this.solde+"ajouté")
        this.toastr.success("compte numéro "+res.numeroCompte+ "avec un solde initial de "+this.solde+"ajouté") */
        Swal.fire({
          position: 'center',
          type: 'success',
          title: "compte numéro "+res.numeroCompte+ "  avec un solde initial de  "+this.solde+"  ajouté",
          showConfirmButton: false,
          timer: 4500
        })
        //this.router.navigate(['/compte'])
      },
      err =>{
        console.log(err.text)
       
      }
    )   
  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
