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
  partenaireData;

  constructor(private formBuilder: FormBuilder, private data: DataService,private router:Router,partenaire:Partenaire) { 
    this.messageForm = this.formBuilder.group({
      name: ['', Validators.required],
      ninea: ['', Validators.required],
      raisonSocial: ['', Validators.required],
      adresse: ['', Validators.required],
      email: ['', Validators.required],
      telephone: ['', Validators.required],
      solde: ['', Validators.required],
      username: ['', Validators.required],
      password: ['', Validators.required],
      nomUser: ['', Validators.required],
      adresseUser: ['', Validators.required],
      emailUser: ['', Validators.required],
      telephoneUser: ['', Validators.required],
      profil: ['', Validators.required],
      photo: ['', Validators.required],
      status: ['', Validators.required]
    })
  }
  onSubmit() {
    this.submitted = true;
    if (!this.messageForm.invalid) {
      console.log("non valider");
      return false;
    }
    console.log(this.partenaireData);
      /* let partenaire: any;
      partenaire = {'ninea':this.ninea, 'raisonSocial':this.raisonSocial,'name':this.name,'adresse':this.adresse,'email':this.email,
                    'telephone':this.telephone,'solde':this.solde,'username':this.username,'password':this.password,'nomUser':this.nomUser,
                    'adresseUser':this.adresseUser,'emailUser':this.emailUser,'telephoneUser':this.telephoneUser,'profil':this.profil,'photo':this.photo
                  };
                  console.log(partenaire); */
      this.data.addPartenaire(this.partenaireData).subscribe(( (result: any) => {
        
        console.log(result);
        this.router.navigate(['/partenaires']);
  
      }), (addError: any[]) => this.errors = addError);
    this.success = true;
  }

  ngOnInit() {
  }

}
