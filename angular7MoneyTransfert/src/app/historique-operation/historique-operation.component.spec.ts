import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HistoriqueOperationComponent } from './historique-operation.component';

describe('HistoriqueOperationComponent', () => {
  let component: HistoriqueOperationComponent;
  let fixture: ComponentFixture<HistoriqueOperationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HistoriqueOperationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HistoriqueOperationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
