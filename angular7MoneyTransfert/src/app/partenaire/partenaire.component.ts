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
  partenaires: Array<Partenaire>= [] ;
     errorMessage: string;
     statut:string;
  constructor(private data: DataService) { }

  getPartenaire() {
    this.data.getPartenaire().subscribe(
      partenaires => this.partenaires = partenaires, error => this.errorMessage = error,
    );
    return this.partenaires;
  }

  ngOnInit() {
    this.getPartenaire();
  }
}
