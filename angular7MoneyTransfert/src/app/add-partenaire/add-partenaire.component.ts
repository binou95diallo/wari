<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, FormControl } from '@angular/forms';
import { DataService } from '../data.service';
import { Route, Router } from '@angular/router';
import { Partenaire } from '../partenaire';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-add-partenaire',
  templateUrl: './add-partenaire.component.html',
  styleUrls: ['./add-partenaire.component.css']
})
export class AddPartenaireComponent implements OnInit {

  messageForm: FormGroup;
  submitted = false;
  success = false;
  errors=[];
  statusData= <any>{};
  imageName:File=null;
  imageUrl:string ="/assets/images/afro3.png";
  partenaireData=new FormGroup({
  solde:new FormControl('',[Validators.required]),
  adresse :new FormControl('', [Validators.required]),
  telephone: new FormControl('', [Validators.required]),
  nomComplet: new FormControl('', [Validators.required]),
  ninea:new FormControl('', [Validators.required]),
  raisonSocial: new FormControl('', [Validators.required]),
  username: new FormControl('', [Validators.required]),
  password: new FormControl('', [Validators.required]),
  email: new FormControl('', [Validators.required, Validators.email]),
  })

  errorMessage={
    'username':[
     {type:'required', message:'Champ username obligatoire '},
     {type:'minlength', message:'veuillez saisir au minimum 5 lettres'},
     {type:'pattern', message:'Ecrivez correctement le username'}
    ],
    
     'password':[
      {type:'required', message:'Champ role est  obligatoire '}
 
     ],
    'telephone':[
     {type:'required', message:'Champ telephone obligatoire '},
     {type:'minlength', message:'veuillez saisir au minimum 9 lettres'},
     {type:'maxlength', message:'veuillez saisir au maximum 9 lettres'},
     {type:'pattern', message:'Ecrivez correctement le numero de telephone'}

    ],
    'nomComplet':[
     {type:'required', message:'Champ prenom obligatoire '},
     {type:'minlength', message:'veuillez saisir au minimum 2 lettres'},
     {type:'pattern', message:'Ecrivez correctement le nom'}

    ],
    'raisonSocial':[
      {type:'required', message:'Champ role est  obligatoire '}

     ],
     'ninea':[
      {type:'required', message:'Champ role est  obligatoire '}
 
     ],
     'solde':[
      {type:'required', message:'Champ role est  obligatoire '}
 
     ],
     'email':[
       {type:'required', message:'email obligatoire'}
     ],
     'adresse':[
       { type:'required', message:'champ obligatoire'}
     ]
  }
  constructor(private formBuilder: FormBuilder, private data: DataService,private router:Router,partenaire:Partenaire) { }
  handleFileInput(file:FileList){
    this.imageName=file.item(0);
    var reader=new FileReader();
    reader.onload=(event:any)=>{
      this.imageUrl=event.target.result;
    }
    reader.readAsDataURL(this.imageName);
  }

  addPartenaire(data:any) {
   this.data.addPartenaire(data,this.imageName)
    .subscribe(
      res => {
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'partenaire ajouté avec success',
          showConfirmButton: false,
          timer: 2000
        })
        this.router.navigate(['/partenaires'])
      },
      err => console.log(err)
    )   
    
  }

  ngOnInit() {
    
  }

}
=======
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, FormControl } from '@angular/forms';
import { DataService } from '../data.service';
import { Route, Router } from '@angular/router';
import { Partenaire } from '../partenaire';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-add-partenaire',
  templateUrl: './add-partenaire.component.html',
  styleUrls: ['./add-partenaire.component.css']
})
export class AddPartenaireComponent implements OnInit {

  messageForm: FormGroup;
  submitted = false;
  success = false;
  errors=[];
  statusData= <any>{};
  imageName:File=null;
  imageUrl:string ="/assets/images/afro3.png";
  partenaireData=new FormGroup({
  solde:new FormControl('',[Validators.required]),
  adresse :new FormControl('', [Validators.required]),
  telephone: new FormControl('', [Validators.required]),
  nomComplet: new FormControl('', [Validators.required]),
  ninea:new FormControl('', [Validators.required]),
  raisonSocial: new FormControl('', [Validators.required]),
  username: new FormControl('', [Validators.required]),
  password: new FormControl('', [Validators.required]),
  email: new FormControl('', [Validators.required, Validators.email]),
  })

  errorMessage={
    'username':[
     {type:'required', message:'Champ username obligatoire '},
     {type:'minlength', message:'veuillez saisir au minimum 5 lettres'},
     {type:'pattern', message:'Ecrivez correctement le username'}
    ],
    
     'password':[
      {type:'required', message:'Champ role est  obligatoire '}
 
     ],
    'telephone':[
     {type:'required', message:'Champ telephone obligatoire '},
     {type:'minlength', message:'veuillez saisir au minimum 9 lettres'},
     {type:'maxlength', message:'veuillez saisir au maximum 9 lettres'},
     {type:'pattern', message:'Ecrivez correctement le numero de telephone'}

    ],
    'nomComplet':[
     {type:'required', message:'Champ prenom obligatoire '},
     {type:'minlength', message:'veuillez saisir au minimum 2 lettres'},
     {type:'pattern', message:'Ecrivez correctement le nom'}

    ],
    'raisonSocial':[
      {type:'required', message:'Champ role est  obligatoire '}

     ],
     'ninea':[
      {type:'required', message:'Champ role est  obligatoire '}
 
     ],
     'solde':[
      {type:'required', message:'Champ role est  obligatoire '}
 
     ],
     'email':[
       {type:'required', message:'email obligatoire'}
     ],
     'adresse':[
       { type:'required', message:'champ obligatoire'}
     ]
  }
  constructor(private formBuilder: FormBuilder, private data: DataService,private router:Router,partenaire:Partenaire) { }
  handleFileInput(file:FileList){
    this.imageName=file.item(0);
    var reader=new FileReader();
    reader.onload=(event:any)=>{
      this.imageUrl=event.target.result;
    }
    reader.readAsDataURL(this.imageName);
  }

  addPartenaire(data:any) {
   this.data.addPartenaire(data,this.imageName)
    .subscribe(
      res => {
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'partenaire ajouté avec success',
          showConfirmButton: false,
          timer: 2000
        })
        this.router.navigate(['/partenaires'])
      },
      err => console.log(err)
    )   
    
  }

  ngOnInit() {
    
  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
