<<<<<<< HEAD
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { Partenaire } from '../partenaire';
import { FormControl, Validators, FormGroup } from '@angular/forms';
import Swal from 'sweetalert2';
import { AuthService } from '../auth.service';

@Component({
  selector: 'app-add-user',
  templateUrl: './add-user.component.html',
  styleUrls: ['./add-user.component.css']
})
export class AddUserComponent implements OnInit {

  imageName:File=null;
  statusData = <any>{};
  partenaires: Partenaire[] ;
  selectedFile=null;
  imageUrl:string ="/assets/images/afro3.png";
  fileToUpload:File= null;
  errorMessages:string;
  registerUserData=new FormGroup({
    adresse :new FormControl('', [Validators.required]),
    telephone: new FormControl('', [Validators.required]),
    nomComplet: new FormControl('', [Validators.required]), 
    username: new FormControl('', [Validators.required]),
    password: new FormControl('', [Validators.required]),
    email: new FormControl('', [Validators.required, Validators.email]),
    profil:new FormControl('',[Validators.required])
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
    'email':[
      {type:'required', message:'email obligatoire'}
    ],
    'adresse':[
      { type:'required', message:'champ obligatoire'}
    ],
    'profil':[
      { type:'required', message:'champ obligatoire'}
    ]
  }

  
  constructor(private  data: DataService,
              private router: Router,private authenticationService: AuthService) { 
              }
              /* getPartenaire() {
                this.data.getPartenaire().subscribe(
                 data => {this.partenaires = data}
                );
                console.log(this.partenaires);
              } */
              handleFileInput(file:FileList){
                this.fileToUpload=file.item(0);
                this.imageName=this.fileToUpload;
                var reader=new FileReader();
                reader.onload=(event:any)=>{
                  this.imageUrl=event.target.result;
                }
                reader.readAsDataURL(this.imageName);
              }

  ngOnInit() {
    //this.getPartenaire();
  }

  registerUser(data:any) {
   this.data.registerUser(data,this.imageName)
    .subscribe(
      res => {
        //console.log(res.error)
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'utilisateur ajouté avec success',
          showConfirmButton: false,
          timer: 2500
        })
        this.router.navigate(['/utilisateurs']);
      },
      err =>this.errorMessages=err.error.detail
    )   
    
  }

  isSuperAdmin(){
    return this.authenticationService. isSuperAdmin();
  }
  isUserPart(){
    return this.authenticationService.isUserPart();
  }
  
  isCaissier(){
    return this.authenticationService.isCaissier();
  }
  /* 
  isPartenaire(){
    return this.authenticationService.isAdminPartenaire();
  } */
  isPartenaireOrUser(){
    return this.authenticationService.isPartenaireOrUser();
  }
  isAdminPartenaireOrCaissier(){
    return this.authenticationService.isAdminPartenaireOrCaissier();
  }
  
  isAdminPartenaire(){
    return this.authenticationService.isAdminPartenaire();
  }
  isAuthenticated(){
    return this.authenticationService.isAuthenticated();
  }
  isAdmin(){
    return this.authenticationService.isAdmin();
  }


}
=======
import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { Partenaire } from '../partenaire';
import { FormControl, Validators, FormGroup } from '@angular/forms';
import Swal from 'sweetalert2';
import { AuthService } from '../auth.service';

@Component({
  selector: 'app-add-user',
  templateUrl: './add-user.component.html',
  styleUrls: ['./add-user.component.css']
})
export class AddUserComponent implements OnInit {

  imageName:File=null;
  statusData = <any>{};
  partenaires: Partenaire[] ;
  selectedFile=null;
  imageUrl:string ="/assets/images/afro3.png";
  fileToUpload:File= null;
  errorMessages:string;
  registerUserData=new FormGroup({
    adresse :new FormControl('', [Validators.required]),
    telephone: new FormControl('', [Validators.required]),
    nomComplet: new FormControl('', [Validators.required]), 
    username: new FormControl('', [Validators.required]),
    password: new FormControl('', [Validators.required]),
    email: new FormControl('', [Validators.required, Validators.email]),
    profil:new FormControl('',[Validators.required])
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
    'email':[
      {type:'required', message:'email obligatoire'}
    ],
    'adresse':[
      { type:'required', message:'champ obligatoire'}
    ],
    'profil':[
      { type:'required', message:'champ obligatoire'}
    ]
  }

  
  constructor(private  data: DataService,
              private router: Router,private authenticationService: AuthService) { 
              }
              /* getPartenaire() {
                this.data.getPartenaire().subscribe(
                 data => {this.partenaires = data}
                );
                console.log(this.partenaires);
              } */
              handleFileInput(file:FileList){
                this.fileToUpload=file.item(0);
                this.imageName=this.fileToUpload;
                var reader=new FileReader();
                reader.onload=(event:any)=>{
                  this.imageUrl=event.target.result;
                }
                reader.readAsDataURL(this.imageName);
              }

  ngOnInit() {
    //this.getPartenaire();
  }

  registerUser(data:any) {
   this.data.registerUser(data,this.imageName)
    .subscribe(
      res => {
        //console.log(res.error)
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'utilisateur ajouté avec success',
          showConfirmButton: false,
          timer: 2500
        })
        this.router.navigate(['/utilisateurs']);
      },
      err =>this.errorMessages=err.error.detail
    )   
    
  }

  isSuperAdmin(){
    return this.authenticationService.isAdmin();
  }
  isUserPart(){
    return this.authenticationService.isUserPart();
  }
  
  isCaissier(){
    return this.authenticationService.isCaissier();
  }
  /* 
  isPartenaire(){
    return this.authenticationService.isAdminPartenaire();
  } */
  isPartenaireOrUser(){
    return this.authenticationService.isPartenaireOrUser();
  }
  isAdminPartenaireOrCaissier(){
    return this.authenticationService.isAdminPartenaireOrCaissier();
  }
  
  isAdminPartenaire(){
    return this.authenticationService.isAdminPartenaire();
  }
  isAuthenticated(){
    return this.authenticationService.isAuthenticated();
  }
  isAdmin(){
    return this.authenticationService.isAdmin();
  }


}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
