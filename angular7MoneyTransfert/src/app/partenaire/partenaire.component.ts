import { Component, OnInit, ViewChild } from '@angular/core';
import {DataService} from '../data.service';
import {Partenaire} from '../partenaire';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import { MatTableDataSource, MatPaginator, MatSort } from '@angular/material';
import { Router } from '@angular/router';
@Component({
  selector: 'app-partenaire',
  templateUrl: './partenaire.component.html',
  styleUrls: ['./partenaire.component.css']
})
export class PartenaireComponent implements OnInit {
  displayedColumns: string[] = [
    'raisonSocial','nomComplet','ninea','telephone','adresse','email','status','id'];
  dataSource: MatTableDataSource<Partenaire>;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @ViewChild(MatSort) sort: MatSort;
  faEdit = faEdit;
  partenaires: Partenaire[] ;
     errorMessage: string;
     status:string;
     ninea: string;
     id:string;
  constructor(private data: DataService, private router:Router) { }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
    
  }
  getPartenaire() {
    this.data.getPartenaire().subscribe(
     data => {this.partenaires = data
     this.load(data);

    }, error => this.errorMessage = error,
    );
    //console.log(this.partenaires);
  }

  bloquerPartenaire(row){

    this.data.bloquerPartenaire(row.ninea).subscribe(
      data => {
        //this.status=row.status
        
        this.router.navigate(['/partenaires'])
     }, error => this.errorMessage = error,
     );
     window.location.reload();
  }

  ngOnInit() {
    
    this.getPartenaire();
  }
  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }
}
