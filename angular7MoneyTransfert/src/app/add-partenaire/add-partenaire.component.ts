import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { DataService } from '../data.service';
import { Route, Router } from '@angular/router';
import { Partenaire } from '../partenaire';

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
  partenaireData={ imageName:File=null};
  imageUrl:string ="/assets/img/afro3.png";

  constructor(private formBuilder: FormBuilder, private data: DataService,private router:Router,partenaire:Partenaire) { }
  handleFileInput(file:FileList){
    this.partenaireData.imageName=file.item(0);
    var reader=new FileReader();
    reader.onload=(event:any)=>{
      this.imageUrl=event.target.result;
    }
    reader.readAsDataURL(this.partenaireData.imageName);
  }

  addPartenaire() {
    console.log(this.partenaireData);
   this.data.addPartenaire(this.partenaireData)
    .subscribe(
      res => {
        this.router.navigate(['/partenaires'])
      },
      err => console.log(err)
    )   
    
  }

  ngOnInit() {
    this.statusData = [{
      id: 1, name: 'bloquer' 
    },
    {
      id: 2, name: 'debloquer' 
    } 
  ]
  }

}
