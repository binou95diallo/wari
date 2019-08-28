import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';
import { Partenaire } from '../partenaire';

@Component({
  selector: 'app-add-user',
  templateUrl: './add-user.component.html',
  styleUrls: ['./add-user.component.css']
})
export class AddUserComponent implements OnInit {

  registerUserData = { imageName:File=null};
  username:string;
  password:string;
  imageName: File;
  statusData = <any>{};
  partenaires: Partenaire[] ;
  selectedFile=null;
  imageUrl:string ="/assets/img/afro3.png";
  fileToUpload:File= null;
  constructor(private  data: DataService,
              private _router: Router) { 
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

  /* onSelectedFile(imageInput :any){
    this.selectedFile =<File>imageInput.files.item(0);
    console.log(this.selectedFile);
    this.imageName= this.selectedFile;
  } */

  registerUser() {
    //this.onSelectedFile(this.imageName);
     //this.selectedFile=this.onSelectedFile(imageInpu);
    //this.selectedFile =<File>event.target.files[0];
    //console.log(event.files[0]);
   // console.log(this.selectedFile);
    console.log(this.registerUserData);
   this.data.registerUser(this.registerUserData)
    .subscribe(
      res => {
        this._router.navigate(['/utilisateurs'])
      },
      err => console.log(err)
    )   
    
  }


}
