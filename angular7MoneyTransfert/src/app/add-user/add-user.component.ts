import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { Partenaire } from '../partenaire';
import { FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-add-user',
  templateUrl: './add-user.component.html',
  styleUrls: ['./add-user.component.css']
})
export class AddUserComponent implements OnInit {

  registerUserData = { imageName:File=null};
  imageName: File;
  statusData = <any>{};
  partenaires: Partenaire[] ;
  selectedFile=null;
  imageUrl:string ="/assets/img/afro3.png";
  fileToUpload:File= null;
  errorMessage:string;


  adresse = new FormControl('', [Validators.required]);
  telephone= new FormControl('', [Validators.required]);
  nomComplet= new FormControl('', [Validators.required]);
  username= new FormControl('', [Validators.required]);
  password= new FormControl('', [Validators.required]);
  email= new FormControl('', [Validators.required, Validators.email]);
  getErrorMessage() {
    return this.adresse.hasError('required') ? 'You must enter a value' :
            this.telephone.hasError('required')? 'You must enter a value':
            this.nomComplet.hasError('required')?'You must enter a value':
            this.username.hasError('required')?'You must enter a value':
            this.password.hasError('required')?'You must enter a value':
            this.email.hasError('required')?'You must enter a value':
            this.email.hasError('email')?'Email not valid':
            '';
  }
  
  constructor(private  data: DataService,
              private router: Router) { 
              }
              getPartenaire() {
                this.data.getPartenaire().subscribe(
                 data => {this.partenaires = data}
                );
                console.log(this.partenaires);
              }
              handleFileInput(file:FileList){
                this.fileToUpload=file.item(0);
                this.registerUserData.imageName=this.fileToUpload;
                var reader=new FileReader();
                reader.onload=(event:any)=>{
                  this.imageUrl=event.target.result;
                }
                reader.readAsDataURL(this.registerUserData.imageName);
              }

  ngOnInit() {
    this.getPartenaire();

    this.statusData = [{
        id: 1, name: 'bloquer' 
      },
      {
        id: 2, name: 'debloquer' 
      } 
    ]
  }

  registerUser() {
    console.log(this.registerUserData);
   this.data.registerUser(this.registerUserData)
    .subscribe(
      res => {
        //console.log(res.error)
        this.router.navigate(['/utilisateurs'])
      },
      err =>this.errorMessage=err.error.detail
    )   
    
  }


}
