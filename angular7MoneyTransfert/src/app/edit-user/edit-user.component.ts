import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Location } from '@angular/common';
import { DataService } from '../data.service';
import { User } from '../users';

@Component({
  selector: 'app-edit-user',
  templateUrl: './edit-user.component.html',
  styleUrls: ['./edit-user.component.css']
})
export class EditUserComponent implements OnInit {
  imageUrl:string ="/assets/img/afro3.png";
  fileToUpload:File= null;
  imageName: File;
  image:string;
  registerUserData= {};
  idCompteData:{};
  errorMessage: string;
  compte={};
  //registerUserData= { imageName:File=null};
  constructor(private route: ActivatedRoute, private router:Router,
    private data: DataService,
    private location: Location) {
    
   }
   /* handleFileInput(file:FileList){
    this.fileToUpload=file.item(0);
    this.registerUserData.imageName=this.fileToUpload;
    var reader=new FileReader();
    reader.onload=(event:any)=>{
      this.imageUrl=event.target.result;
    }
    reader.readAsDataURL(this.registerUserData.imageName);
  } */


   showUserById(){
    const id = +this.route.snapshot.paramMap.get('id');
    this.data.showUser(id).subscribe(
      data=>{
        console.log(data["imageName"]);
        this.registerUserData=data
    });
   }

   editUser(){
    const id = +this.route.snapshot.paramMap.get('id');
    this.data.editUser(id,this.registerUserData).subscribe(
      data=>{
        this.router.navigate(['/utilisateurs']);
    });
  }

  ngOnInit() {
    this.showUserById();
  }

}
