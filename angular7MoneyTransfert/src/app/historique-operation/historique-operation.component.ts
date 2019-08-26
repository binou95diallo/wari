import { Component, OnInit } from '@angular/core';
import { HistoriqueOp } from './historiOp';
import { DataService } from '../data.service';

@Component({
  selector: 'app-historique-operation',
  templateUrl: './historique-operation.component.html',
  styleUrls: ['./historique-operation.component.css']
})
export class HistoriqueOperationComponent implements OnInit {

  histo: HistoriqueOp[] ;
     errorMessage: string;
     statut:string;
  constructor(private data: DataService) { }

  getHistoOp() {
    this.data.getHistoOp().subscribe(
     data => {this.histo = data}, error => this.errorMessage = error,
    );
    console.log(this.histo);
  }

  ngOnInit() {
    this.getHistoOp();
  }

}
