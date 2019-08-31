import { Component, OnInit } from '@angular/core';
import {Compte} from '../compte';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import { DataService } from '../data.service';

@Component({
  selector: 'app-compte',
  templateUrl: './compte.component.html',
  styleUrls: ['./compte.component.css']
})
export class CompteComponent implements OnInit {
  faEdit = faEdit;
  comptes: Compte[] ;
     errorMessage: string;
     statut:string;
  constructor(private data: DataService) { }

  getCompte() {
    this.data.getCompte().subscribe(
     data => {this.comptes = data}, error => this.errorMessage = error,
    );
    console.log(this.comptes);
  }

 
  ngOnInit() {
    this.getCompte();
  }

}
