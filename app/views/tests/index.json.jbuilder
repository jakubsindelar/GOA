json.array!(@tests) do |test|
  json.extract! test, :id, :name, :subject_id, :start_date, :note
  json.url test_url(test, format: :json)
end
