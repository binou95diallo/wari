import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, FormControl } from '@angular/forms';
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
  solde= new FormControl('',[Validators.required]);
  adresse = new FormControl('', [Validators.required]);
  telephone= new FormControl('', [Validators.required]);
  nomComplet= new FormControl('', [Validators.required]);
  ninea= new FormControl('', [Validators.required]);
  raisonSocial= new FormControl('', [Validators.required]);
  username= new FormControl('', [Validators.required]);
  password= new FormControl('', [Validators.required]);
  email= new FormControl('', [Validators.required, Validators.email]);
  getErrorMessage() {
    return this.adresse.hasError('required') ? 'You must enter a value' :
            this.telephone.hasError('required')? 'You must enter a value':
            this.nomComplet.hasError('required')?'You must enter a value':
            this.ninea.hasError('required')? 'You must enter a value':
            this.solde.hasError('required')?'You must enter a value':
            this.raisonSocial.hasError('required')?'You must enter a value':
            this.username.hasError('required')?'You must enter a value':
            this.password.hasError('required')?'You must enter a value':
            this.email.hasError('required')?'You must enter a value':
            this.email.hasError('email') ? 'Not a valid email' :
            '';
  }

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
