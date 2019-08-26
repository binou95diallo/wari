import { Component, OnInit } from '@angular/core';
import {DataService} from '../data.service';
import {Partenaire} from '../partenaire';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
@Component({
  selector: 'app-partenaire',
  templateUrl: './partenaire.component.html',
  styleUrls: ['./partenaire.component.css']
})
export class PartenaireComponent implements OnInit {

  faEdit = faEdit;
  partenaires: Partenaire[] ;
     errorMessage: string;
     statut:string;
  constructor(private data: DataService) { }

  getPartenaire() {
    this.data.getPartenaire().subscribe(
     data => {this.partenaires = data}, error => this.errorMessage = error,
    );
    console.log(this.partenaires);
  }

  ngOnInit() {
    this.getPartenaire();
  }
}
